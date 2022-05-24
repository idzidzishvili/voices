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
		$data['aboutUs'] = $this->Admindb->getAboutUsDetails();
		$data['page'] = 'aboutus';
		$this->load->view('admin/about', $data);
	}


	public function voicelanguages()
	{
		$this->load->view('admin/voicelanguages');
	}
}
