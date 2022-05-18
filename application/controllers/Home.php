<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	private $currLang;

	public function __construct(){
		parent::__construct();
		$this->load->model(['actor', 'mainmodel']);
		$this->lang->load('home');
		$langs = ['ge', 'en', 'ru'];
		if(in_array($this->lang->lang(), $langs)) $this->currLang = $this->lang->lang();
		else $this->currLang = 'ge';
	}

	
	public function index()
	{
		$availableLanguages = $this->mainmodel->getLanguagesArr();
		$langId = 1;
		if(isset($_GET['voicelang'])){
			foreach($availableLanguages as $lang){
				if(strtolower($lang->dom) == strtolower($_GET['voicelang'])){
					$langId = $lang->id;
					break;
				}
			}			
		}

		$data['actors'] = $this->actor->getActorsVoicesLangByLangID($langId, $this->currLang);
		$data['sliders'] = $this->mainmodel->getSliderImages($this->currLang);
		$data['voiceLanguages'] = $this->mainmodel->getActiveLanguages($this->currLang);
		$data['currentLanguage'] = $this->currLang;
		$data['genders'] = $this->mainmodel->getGenders($this->currLang);


		// print_r($data);exit;
		$this->load->view('home', $data);
	}












	public function services()
	{
		// $this->load->view('home2');
	}

	public function aboutus()
	{
		// $this->load->view('home2');
	}

	public function blog()
	{
		// $this->load->view('home2');
	}

	public function contact()
	{
		// $this->load->view('home2');
	}




	public function test()
	{
		$this->load->view('test');
		
	}

}
