<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	private $siteLanguage;
	private $voiceLanguage;

	public function __construct(){
		parent::__construct();
		$this->load->model(['actor', 'mainmodel']);
		$this->lang->load('home');
		$langs = ['ge', 'en', 'ru'];
		if(in_array($this->lang->lang(), $langs)) $this->siteLanguage = $this->lang->lang();
		else $this->siteLanguage = 'ge';
	}

	
	public function index()
	{
		$availableLanguages = $this->mainmodel->getLanguagesArr();
		$this->voiceLanguage = 1;
		if(isset($_GET['voicelang'])){
			foreach($availableLanguages as $lang){
				if(strtolower($lang->dom) == strtolower($_GET['voicelang'])){
					$this->voiceLanguage = $lang->id;
					break;
				}
			}
		}

		$data['actors'] = $this->actor->getActorsVoicesLangByLangID($this->voiceLanguage, $this->siteLanguage);
		$data['sliders'] = $this->mainmodel->getSliderImages($this->siteLanguage);
		$data['voiceLanguages'] = $this->mainmodel->getActiveLanguages($this->siteLanguage);
		$data['currentLanguage'] = $this->siteLanguage;
		$data['voiceLanguageId'] = $this->voiceLanguage;
		$data['genders'] = $this->mainmodel->getGenders($this->siteLanguage);
		$data['contact'] = $this->mainmodel->getContactDetails();
		$this->load->view('home', $data);
	}


	public function services()
	{
		$data['services'] = $this->mainmodel->getServices();
		$data['contact'] = $this->mainmodel->getContactDetails();
		$this->load->view('services', $data);
	}


	public function aboutus()
	{
		$data['partners'] = $this->mainmodel->getPartners();
		$data['aboutUs'] = $this->mainmodel->getAboutUs();
		$data['contact'] = $this->mainmodel->getContactDetails();
		$this->load->view('about', $data);
	}
	
	
	public function blogs()
	{
		$blogs = null;
		if($this->input->get('tag')){
			$blogs = $this->mainmodel->getBlogsByTag($this->input->get('tag'));
			if(!$blogs){
				return redirect(site_url('blogs'));
			}
		}else{
			$blogs = $this->mainmodel->getBlogs();
		}

		foreach($blogs as $blog){
			if($this->lang->lang()=='ge')
				$blog->slug = preg_replace('!\s+!', '-', preg_replace('/[^ა-ჰ0-9\s]/', '', strtolower($blog->{'title_'.$this->lang->lang()})));
			if($this->lang->lang()=='en')
				$blog->slug = preg_replace('!\s+!', '-', preg_replace('/[^a-zA-Z0-9\s]/', '', strtolower($blog->{'title_'.$this->lang->lang()})));
			if($this->lang->lang()=='ru')
				$blog->slug =  preg_replace('!\s+!', '-', preg_replace('/[^\w_]+/u', '-', trim($blog->{'title_'.$this->lang->lang()})));//'/[^\w_]+/u'
		}

		$data['contact'] = $this->mainmodel->getContactDetails();
		$data['blogs'] = $blogs;		
		$this->load->view('blogs', $data);
	}

	public function blog($lang, $id)//(?)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			$data['blog'] = $this->mainmodel->getBlogDetails($id);
			if($data['blog']['blog']){
				$data['contact'] = $this->mainmodel->getContactDetails();
				$data['fbLink'] = base_url($this->uri->uri_string);

				// print_r($data['fbLink']);exit;
				return $this->load->view('blog', $data);	
			}
		}
		redirect(site_url('blogs'));
	}


	public function contact()
	{
		$data['contact'] = $this->mainmodel->getContactDetails();
		$this->load->view('contact', $data);
	}

	
	public function send_mail() {       
		$to_name = $this->input->post('name'); 
		$to_phone = $this->input->post('phone');
		$to_status = htmlspecialchars($this->input->post('status'));
		$to_email = $this->input->post('email');
 
		$this->email->from("info@voices.ge", 'Voices.Ge'); 
		$this->email->to("info@voices.ge");
		$this->email->subject('Voices.Ge :: შეტყობინება'); 
		$this->email->message('სახელი გვარი: '.$to_name.' მობილურის ნომერი: '.$to_phone.'  ელექტრონული ფოსტა: '.$to_email.'  შეტყობინება: '.$to_status.'');  
		//Send mail 
		if($this->email->send()) 
			$msg = "შეტყობინება წარატებით გაიგზავნა."; 
		else 
			$msg = "დაფიქსირდა შეცდომა. სცადეთ თავიდან";
		$this->session->setFlashdata('msg', $msg);
		$this->load->view('contact', compact('msg')); 
	} 	

	public function sendmail(){ //home page - ajax
		$this->load->helper(['email', 'form']);
		$this->load->library(['form_validation', 'email']);
		$this->form_validation->set_rules('msg', 'სახელი', 				 'required');
		$this->form_validation->set_rules('vid', 	 'ტელეფონის ნომერი', 'required');
		$this->form_validation->set_rules('fullname', 	 'სურათი', 				 'required');
		$this->form_validation->set_rules('phone', 'პაროლი', 				'required');
		$this->form_validation->set_rules('email', 'პაროლი', 				'required');
		$this->form_validation->set_rules('companyname', 'პაროლი', 				'required');
		$this->form_validation->set_rules('orderdetails', 'პაროლი', 				'');
	
		if ($this->form_validation->run()) {
			$this->email->from("info@voices.ge", 'Voices.Ge'); 
			$this->email->to("ilia.dzidzishvili@gmail.com");
			$this->email->subject('Voices.Ge :: შეტყობინება'); 
			$this->email->message(
				'სახელი გვარი: '.$this->input->post('fullname').', '.
				' ტელეფონი: '.$this->input->post('phone').', '.
				' Email: '.$this->input->post('email').', '.
				' კომპანია: '.$this->input->post('companyname').', '.
				' შეკვეთის დეტალები: '.$this->input->post('orderdetails').', '.
				' VID: '.$this->input->post('vid').', '.
				'  შეტყობინება: '.$this->input->post('msg').
				''
			);  
			//Send mail 
			if($this->email->send()) {
				echo json_encode(["status" => "success", "csrf_token" => $this->security->get_csrf_hash()]);
				return;
			}else {
				echo json_encode(["status" => "error", "csrf_token" => $this->security->get_csrf_hash()]);
				return;				
			}		
		}else{
			echo json_encode(["msg" => validation_errors(), "csrf_token" => $this->security->get_csrf_hash()]);
		}

	}


	public function getSounds($lang, $actor, $voiceLang){
		if(!in_array($lang, ['ge', 'en', 'ru'])) $lang = 'ge';
		$sounds = $this->actor->getActorSoundByLangid($actor, $voiceLang, $lang);
		if($sounds)
			echo json_encode(['status' => 'success', 'actor' => $actor, 'sounds' => $sounds, 'lang' =>  $this->lang->lang()]);
		else
			echo json_encode(['status' => 'error' ]);
		return;
	}



	public function test()
	{
		echo site_url();
		echo '<br>';
		echo base_url();
		
	}

}
