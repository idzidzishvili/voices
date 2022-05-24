<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model(['actor', 'Admindb']);
		$this->load->helper('form');
		$this->load->library(['form_validation', 'pagination']);
		$this->load->config('appconfig');
	}

	public function actors()
	{
		$data['actors'] = $this->actor->getActors();
		$data['page'] = 'actors';
		$this->load->view('admin/actors', $data);
	}

	public function partners()
	{
		$data['partners'] = $this->Admindb->getPartners();
		$data['page'] = 'partners';
		$this->load->view('admin/partners', $data);
	}
	public function addPartner()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
			$this->form_validation->set_rules('url', 'მისამართი', 'trim|required');
			if (empty($_FILES['partnerImage']['name']))
				$this->form_validation->set_rules('partnerImage', 'სურათი', 'required');
			if ($this->form_validation->run()) {
				if($this->Admindb->addPartner($this->input->post('url', true), $_FILES['partnerImage']['name'])){
					$config = $this->config->item('fileUploadConfig');
					$config['upload_path'] = $this->config->item('uploadFolder').'partners/';				
					$this->load->library('upload');
					$this->upload->initialize($config);
					if ($this->upload->do_upload('partnerImage')) {
						redirect('admin/partners');
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
					} else {
						// array_push($notUplFiles, $originalFileName);
					}
				}	
			}
		}
		$data['page'] = 'partner-add';
		$this->load->view('admin/partner-add', $data);
	}

	public function editPartner($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0 ) {
			if(strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST'){
				$this->form_validation->set_rules('url', 'მისამართი', 'trim|required');
				// if(empty($_FILES['partnerImage']['name']))
				// 	$this->form_validation->set_rules('partnerImage', 'სურათი', 'required');
				if ($this->form_validation->run()) {
					$editArr = [];
					$editArr['url'] = $this->input->post('url', true);
					if($_FILES['partnerImage']['name'])
						$editArr['img'] = $_FILES['partnerImage']['name'];
					if($this->Admindb->upatePartner($id, $editArr)){
						$config = $this->config->item('fileUploadConfig');
						$config['upload_path'] = $this->config->item('uploadFolder').'partners/';				
						$this->load->library('upload');
						$this->upload->initialize($config);
						if ($this->upload->do_upload('partnerImage')) {
							// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
							//array_push($oldFiles, $originalFileName);
							return redirect('admin/partners');
						} else {
							// array_push($notUplFiles, $originalFileName);
						}
					}
				}
			}
			$data['partner'] = $this->Admindb->getPartner($id);
			$data['id'] = $id;
			$data['page'] = 'partner-edit';
			$this->load->view('admin/partner-edit', $data);
		}
	}

	public function deletepartner($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			$this->Admindb->deletePartner($id);
		}
		redirect('admin/partners');
	}


	public function contact()
	{
		if(strtoupper($_SERVER["REQUEST_METHOD"])=='POST'){
			$this->form_validation->set_rules('address_ge', 'მისამართი ქართულად', 'trim|required');
			$this->form_validation->set_rules('address_en', 'მისამართი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('address_ru', 'მისამართი რუსულად', 'trim|required');
			$this->form_validation->set_rules('phone', 'ტელეფონის ნომერი', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
			$this->form_validation->set_rules('location', 'ლოკაცია', 'trim|required');

			if ($this->form_validation->run()) {
				$contact = $this->Admindb->updateContact(
					$this->input->post('address_ge', true), 
					$this->input->post('address_en', true), 
					$this->input->post('address_ru', true), 
					$this->input->post('phone', true), 
					$this->input->post('email', true), 
					$this->input->post('location', true)
				);
				if($contact)
					$this->session->set_flashdata('alertMsg', array('status' => true, 'message' => 'კონტაქტი განახლდა წარმატებით'));
				else
					$this->session->set_flashdata('alertMsg', array('status' => false, 'message' => 'ვერ მოხერხდა მონაცემების განახლება'));
				return redirect('admin/contact');
			}
		}
		$data['contact'] = $this->Admindb->getContactDetails();
		$data['page'] = 'contact';
		$this->load->view('admin/contact', $data);
	}

	
	public function aboutus()
	{
		if(strtoupper($_SERVER["REQUEST_METHOD"])=='POST'){
			$this->form_validation->set_rules('our_experience_ge', 		'გამოცდილება ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('our_experience_txt_ge',  'გამოცდილება ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('our_experience_en', 		'გამოცდილება ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('our_experience_txt_en',  'გამოცდილება ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('our_experience_ru', 		'გამოცდილება რუსულად', 				'trim|required');
			$this->form_validation->set_rules('our_experience_txt_ru',  'გამოცდილება ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('our_techbase_ge', 		 'ტექნიკური ბაზა ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('our_techbase_txt_ge',  'ტექნიკური ბაზა ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('our_techbase_en', 		 'ტექნიკური ბაზა ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('our_techbase_txt_en',  'ტექნიკური ბაზა ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('our_techbase_ru', 		 'ტექნიკური ბაზა რუსულად', 				'trim|required');
			$this->form_validation->set_rules('our_techbase_txt_ru',  'ტექნიკური ბაზა ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('trust_us_ge', 		'რატომ გვენდობიან ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('trust_us_txt_ge',  'რატომ გვენდობიან ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('trust_us_en', 		'რატომ გვენდობიან ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('trust_us_txt_en',  'რატომ გვენდობიან ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('trust_us_ru', 		'რატომ გვენდობიან რუსულად', 				'trim|required');
			$this->form_validation->set_rules('trust_us_txt_ru',  'რატომ გვენდობიან ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('choose_us_ge', 		'რატომ გვირჩევენ ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('choose_us_txt_ge', 'რატომ გვირჩევენ ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('choose_us_en', 		'რატომ გვირჩევენ ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('choose_us_txt_en', 'რატომ გვირჩევენ ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('choose_us_ru', 		'რატომ გვირჩევენ რუსულად', 				'trim|required');
			$this->form_validation->set_rules('choose_us_txt_ru', 'რატომ გვირჩევენ ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('our_direction_ge', 	 'ჩვენი მიმართულება ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('our_direction_txt_ge', 'ჩვენი მიმართულება ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('our_direction_en', 	 'ჩვენი მიმართულება ინგლისურად', 		 'trim|required');
			$this->form_validation->set_rules('our_direction_txt_en', 'ჩვენი მიმართულება ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('our_direction_ru', 	 'ჩვენი მიმართულება რუსულად', 			 'trim|required');
			$this->form_validation->set_rules('our_direction_txt_ru', 'ჩვენი მიმართულება ტექსტი რუსულად', 	'trim|required');

			if ($this->form_validation->run()) {
				$editArr = [];
				$editArr[0] = [
					'name_ge' => $this->input->post('our_direction_ge', true),
					'name_en' => $this->input->post('our_direction_en', true),
					'name_ru' => $this->input->post('our_direction_ru', true),
					'text_ge' => $this->input->post('our_direction_txt_ge', true),
					'text_en' => $this->input->post('our_direction_txt_en', true),
					'text_ru' => $this->input->post('our_direction_txt_ru', true),
				];
				$editArr[1] = [
					'name_ge' => $this->input->post('our_experience_ge', true),
					'name_en' => $this->input->post('our_experience_en', true),
					'name_ru' => $this->input->post('our_experience_ru', true),
					'text_ge' => $this->input->post('our_experience_txt_ge', true),
					'text_en' => $this->input->post('our_experience_txt_en', true),
					'text_ru' => $this->input->post('our_experience_txt_ru', true),
				];
				$editArr[2] = [
					'name_ge' => $this->input->post('our_techbase_ge', true),
					'name_en' => $this->input->post('our_techbase_en', true),
					'name_ru' => $this->input->post('our_techbase_ru', true),
					'text_ge' => $this->input->post('our_techbase_txt_ge', true),
					'text_en' => $this->input->post('our_techbase_txt_en', true),
					'text_ru' => $this->input->post('our_techbase_txt_ru', true),
				];
				$editArr[3] = [
					'name_ge' => $this->input->post('trust_us_ge', true),
					'name_en' => $this->input->post('trust_us_en', true),
					'name_ru' => $this->input->post('trust_us_ru', true),
					'text_ge' => $this->input->post('trust_us_txt_ge', true),
					'text_en' => $this->input->post('trust_us_txt_en', true),
					'text_ru' => $this->input->post('trust_us_txt_ru', true),
				];
				$editArr[4] = [
					'name_ge' => $this->input->post('choose_us_ge', true),
					'name_en' => $this->input->post('choose_us_en', true),
					'name_ru' => $this->input->post('choose_us_ru', true),
					'text_ge' => $this->input->post('choose_us_txt_ge', true),
					'text_en' => $this->input->post('choose_us_txt_en', true),
					'text_ru' => $this->input->post('choose_us_txt_ru', true),
				];

				if($_FILES['our_experience_img']['name'])
					$editArr[1]['img'] = $_FILES['our_experience_img']['name'];
				if($_FILES['our_techbase_img']['name'])
					$editArr[2]['img'] = $_FILES['our_techbase_img']['name'];
				if($_FILES['trust_us_img']['name'])
					$editArr[3]['img'] = $_FILES['trust_us_img']['name'];
				if($_FILES['choose_us_img']['name'])
					$editArr[4]['img'] = $_FILES['choose_us_img']['name'];

				$this->Admindb->updateAbout($editArr);

				$config = $this->config->item('fileUploadConfig');
				$config['upload_path'] = 'assets/images/about/';				
				$this->load->library('upload');
				$this->upload->initialize($config);

				if($_FILES['our_experience_img']['name'])
					$this->upload->do_upload('our_experience_img');
				if($_FILES['our_techbase_img']['name'])
					$this->upload->do_upload('our_techbase_img');
				if($_FILES['trust_us_img']['name'])
					$this->upload->do_upload('trust_us_img');
				if($_FILES['choose_us_img']['name'])
					$this->upload->do_upload('choose_us_img');

				return redirect('admin/aboutus');
				

				// if($contact)
				// 	$this->session->set_flashdata('alertMsg', array('status' => true, 'message' => 'კონტაქტი განახლდა წარმატებით'));
				// else
				// 	$this->session->set_flashdata('alertMsg', array('status' => false, 'message' => 'ვერ მოხერხდა მონაცემების განახლება'));
				// return redirect('admin/contact');
			}
		}
		$data['aboutUs'] = $this->Admindb->getAboutUsDetails();
		$data['page'] = 'aboutus';
		$this->load->view('admin/about', $data);
	}

	public function services()
	{
		if(strtoupper($_SERVER["REQUEST_METHOD"])=='POST'){
			$this->form_validation->set_rules('ad_ge', 		'სარეკლამო რგოლი ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('ad_txt_ge',  'სარეკლამო რგოლი ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('ad_en', 		'სარეკლამო რგოლი ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('ad_txt_en',  'სარეკლამო რგოლი ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('ad_ru', 		'სარეკლამო რგოლი რუსულად', 				'trim|required');
			$this->form_validation->set_rules('ad_txt_ru',  'სარეკლამო რგოლი ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('ivr_ge', 		 'ავტომოპასუხე ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('ivr_txt_ge',  'ავტომოპასუხე ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('ivr_en', 		 'ავტომოპასუხე ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('ivr_txt_en',  'ავტომოპასუხე ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('ivr_ru', 		 'ავტომოპასუხე რუსულად', 				'trim|required');
			$this->form_validation->set_rules('ivr_txt_ru',  'ავტომოპასუხე ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('dubbing_ge', 	 'ვიდეო გახმოვანება ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('dubbing_txt_ge', 'ვიდეო გახმოვანება ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('dubbing_en', 	 'ვიდეო გახმოვანება ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('dubbing_txt_en', 'ვიდეო გახმოვანება ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('dubbing_ru', 	 'ვიდეო გახმოვანება რუსულად', 				'trim|required');
			$this->form_validation->set_rules('dubbing_txt_ru', 'ვიდეო გახმოვანება ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('audiobook_ge', 		'აუდიო წიგნი ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('audiobook_txt_ge', 'აუდიო წიგნი ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('audiobook_en', 		'აუდიო წიგნი ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('audiobook_txt_en', 'აუდიო წიგნი ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('audiobook_ru', 		'აუდიო წიგნი რუსულად', 				'trim|required');
			$this->form_validation->set_rules('audiobook_txt_ru', 'აუდიო წიგნი ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('adtext_ge', 	 'სარეკლამო რგოლის ტექსტი ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('adtext_txt_ge', 'სარეკლამო რგოლის ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('adtext_en', 	 'სარეკლამო რგოლის ტექსტი ინგლისურად', 		 'trim|required');
			$this->form_validation->set_rules('adtext_txt_en', 'სარეკლამო რგოლის ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('adtext_ru', 	 'სარეკლამო რგოლის ტექსტი რუსულად', 			 'trim|required');
			$this->form_validation->set_rules('adtext_txt_ru', 'სარეკლამო რგოლის ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('translation_ge', 		'თარგმნა ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('translation_txt_ge',  'თარგმნა ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('translation_en', 		'თარგმნა ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('translation_txt_en',  'თარგმნა ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('translation_ru', 		'თარგმნა რუსულად', 				'trim|required');
			$this->form_validation->set_rules('translation_txt_ru',  'თარგმნა ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('orderservice_ge', 		 'მომსახურების შეკვეთა ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('orderservice_txt_ge',  'მომსახურების შეკვეთა ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('orderservice_en', 		 'მომსახურების შეკვეთა ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('orderservice_txt_en',  'მომსახურების შეკვეთა ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('orderservice_ru', 		 'მომსახურების შეკვეთა რუსულად', 				'trim|required');
			$this->form_validation->set_rules('orderservice_txt_ru',  'მომსახურების შეკვეთა ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('proceedorder_ge', 		'შეკვეთის გაგრძელება ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('proceedorder_txt_ge',  'შეკვეთის გაგრძელება ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('proceedorder_en', 		'შეკვეთის გაგრძელება ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('proceedorder_txt_en',  'შეკვეთის გაგრძელება ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('proceedorder_ru', 		'შეკვეთის გაგრძელება რუსულად', 				'trim|required');
			$this->form_validation->set_rules('proceedorder_txt_ru',  'შეკვეთის გაგრძელება ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('invoice_ge', 	  'ინვოისი ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('invoice_txt_ge',  'ინვოისი ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('invoice_en', 	  'ინვოისი ინგლისურად', 		   'trim|required');
			$this->form_validation->set_rules('invoice_txt_en',  'ინვოისი ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('invoice_ru', 	  'ინვოისი რუსულად', 				'trim|required');
			$this->form_validation->set_rules('invoice_txt_ru',  'ინვოისი ტექსტი რუსულად', 	'trim|required');

			$this->form_validation->set_rules('finalizeorder_ge', 	 'შეკვეთის დასრულება ქართულად', 		  'trim|required');
			$this->form_validation->set_rules('finalizeorder_txt_ge', 'შეკვეთის დასრულება ტექსტი ქართულად',  'trim|required');
			$this->form_validation->set_rules('finalizeorder_en', 	 'შეკვეთის დასრულება ინგლისურად', 		 'trim|required');
			$this->form_validation->set_rules('finalizeorder_txt_en', 'შეკვეთის დასრულება ტექსტი ინგლისურად', 'trim|required');
			$this->form_validation->set_rules('finalizeorder_ru', 	 'შეკვეთის დასრულება რუსულად', 			 'trim|required');
			$this->form_validation->set_rules('finalizeorder_txt_ru', 'შეკვეთის დასრულება ტექსტი რუსულად', 	'trim|required');

			if ($this->form_validation->run()) {
				$editArr = [];
				$editArr[0] = [
					'name_ge' => $this->input->post('ad_ge', true),
					'name_en' => $this->input->post('ad_en', true),
					'name_ru' => $this->input->post('ad_ru', true),
					'text_ge' => $this->input->post('ad_txt_ge', true),
					'text_en' => $this->input->post('ad_txt_en', true),
					'text_ru' => $this->input->post('ad_txt_ru', true),
				];
				$editArr[1] = [
					'name_ge' => $this->input->post('ivr_ge', true),
					'name_en' => $this->input->post('ivr_en', true),
					'name_ru' => $this->input->post('ivr_ru', true),
					'text_ge' => $this->input->post('ivr_txt_ge', true),
					'text_en' => $this->input->post('ivr_txt_en', true),
					'text_ru' => $this->input->post('ivr_txt_ru', true),
				];
				$editArr[2] = [
					'name_ge' => $this->input->post('dubbing_ge', true),
					'name_en' => $this->input->post('dubbing_en', true),
					'name_ru' => $this->input->post('dubbing_ru', true),
					'text_ge' => $this->input->post('dubbing_txt_ge', true),
					'text_en' => $this->input->post('dubbing_txt_en', true),
					'text_ru' => $this->input->post('dubbing_txt_ru', true),
				];
				$editArr[3] = [
					'name_ge' => $this->input->post('audiobook_ge', true),
					'name_en' => $this->input->post('audiobook_en', true),
					'name_ru' => $this->input->post('audiobook_ru', true),
					'text_ge' => $this->input->post('audiobook_txt_ge', true),
					'text_en' => $this->input->post('audiobook_txt_en', true),
					'text_ru' => $this->input->post('audiobook_txt_ru', true),
				];
				$editArr[4] = [
					'name_ge' => $this->input->post('adtext_ge', true),
					'name_en' => $this->input->post('adtext_en', true),
					'name_ru' => $this->input->post('adtext_ru', true),
					'text_ge' => $this->input->post('adtext_txt_ge', true),
					'text_en' => $this->input->post('adtext_txt_en', true),
					'text_ru' => $this->input->post('adtext_txt_ru', true),
				];
				$editArr[5] = [
					'name_ge' => $this->input->post('translation_ge', true),
					'name_en' => $this->input->post('translation_en', true),
					'name_ru' => $this->input->post('translation_ru', true),
					'text_ge' => $this->input->post('translation_txt_ge', true),
					'text_en' => $this->input->post('translation_txt_en', true),
					'text_ru' => $this->input->post('translation_txt_ru', true),
				];
				$editArr[6] = [
					'name_ge' => $this->input->post('orderservice_ge', true),
					'name_en' => $this->input->post('orderservice_en', true),
					'name_ru' => $this->input->post('orderservice_ru', true),
					'text_ge' => $this->input->post('orderservice_txt_ge', true),
					'text_en' => $this->input->post('orderservice_txt_en', true),
					'text_ru' => $this->input->post('orderservice_txt_ru', true),
				];
				$editArr[7] = [
					'name_ge' => $this->input->post('proceedorder_ge', true),
					'name_en' => $this->input->post('proceedorder_en', true),
					'name_ru' => $this->input->post('proceedorder_ru', true),
					'text_ge' => $this->input->post('proceedorder_txt_ge', true),
					'text_en' => $this->input->post('proceedorder_txt_en', true),
					'text_ru' => $this->input->post('proceedorder_txt_ru', true),
				];
				$editArr[8] = [
					'name_ge' => $this->input->post('invoice_ge', true),
					'name_en' => $this->input->post('invoice_en', true),
					'name_ru' => $this->input->post('invoice_ru', true),
					'text_ge' => $this->input->post('invoice_txt_ge', true),
					'text_en' => $this->input->post('invoice_txt_en', true),
					'text_ru' => $this->input->post('invoice_txt_ru', true),
				];
				$editArr[9] = [
					'name_ge' => $this->input->post('finalizeorder_ge', true),
					'name_en' => $this->input->post('finalizeorder_en', true),
					'name_ru' => $this->input->post('finalizeorder_ru', true),
					'text_ge' => $this->input->post('finalizeorder_txt_ge', true),
					'text_en' => $this->input->post('finalizeorder_txt_en', true),
					'text_ru' => $this->input->post('finalizeorder_txt_ru', true),
				];

				$this->Admindb->updateAbout($editArr);
				return redirect('admin/services');
				// if($contact)
				// 	$this->session->set_flashdata('alertMsg', array('status' => true, 'message' => 'კონტაქტი განახლდა წარმატებით'));
				// else
				// 	$this->session->set_flashdata('alertMsg', array('status' => false, 'message' => 'ვერ მოხერხდა მონაცემების განახლება'));
				// return redirect('admin/contact');
			}
		}
		$data['services'] = $this->Admindb->getServices();
		$data['page'] = 'services';
		$this->load->view('admin/services', $data);
	}


	public function voicelanguages()
	{
		$this->load->view('admin/voicelanguages');
	}
}
