<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model(['actor', 'Admindb']);
		$this->load->helper('form');
		$this->load->library(['form_validation', 'pagination']);
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


	public function voicelanguages()
	{
		$this->load->view('admin/voicelanguages');
	}
}
