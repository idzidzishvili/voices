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
		$this->load->helper('form');
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
		$this->load->view('services', $data);
	}


	public function aboutus()
	{
		$data['partners'] = $this->mainmodel->getPartners();
		$data['aboutUs'] = $this->mainmodel->getAboutUs();
		$this->load->view('about', $data);
	}


	public function blog()
	{
		$this->load->view('blog');
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


	public function getSounds($actor, $voiceLang){
		$sounds = $this->actor->getActorSoundByLangid($actor, $voiceLang, $this->lang->lang());
		if($sounds)
			echo json_encode(['status' => 'success', 'actor' => $actor, 'sounds' => $sounds ]);
		else
			echo json_encode(['status' => 'error' ]);
		return;
	}



	public function test()
	{
		$this->load->view('test');
		
	}

}
