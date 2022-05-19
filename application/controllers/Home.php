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


	public function getSounds($actor, $voiceLang){

		$sounds = $this->actor->getActorSoundByLangid($actor, $voiceLang, $this->lang->lang());
		if($sounds)
			echo json_encode(['status' => 'success', 'sounds' => $sounds ]);
		else
			echo json_encode(['status' => 'error' ]);
		return;
	}



	public function test()
	{
		$this->load->view('test');
		
	}

}
