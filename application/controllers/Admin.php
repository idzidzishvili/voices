<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model(['actor']);
	}

	public function actors()
	{
		$data['actors'] = $this->actor->getActors();
		$this->load->view('admin/actors', $data);
	}


	public function voicelanguages()
	{
		$this->load->view('admin/voicelanguages');
	}
}
