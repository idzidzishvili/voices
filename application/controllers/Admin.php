<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) redirect('login');
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

	public function addActor()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
			$this->form_validation->set_rules('name', 'სახელი, გვარი', 'trim|required');
			$this->form_validation->set_rules('gender', 'სქესი', 'integer|required');
			$this->form_validation->set_rules('vid', 'Voice ID', 'required|max_length[10]|is_unique[actors.vid]');
			if (empty($_FILES['profileimage']['name']))
				$this->form_validation->set_rules('profileimage', 'სურათი', 'required');
			if ($this->form_validation->run()) {
				$actorId = $this->Admindb->addActor($this->input->post('name', true), $this->input->post('gender'), $this->input->post('vid', true));
				if ($actorId) {
					$config = $this->config->item('fileUploadConfig');
					$config['upload_path'] = 'assets/images/actors/';
					$filename = 'actor' . str_pad($actorId, 4, "0", STR_PAD_LEFT) . '.' . pathinfo($_FILES['profileimage']['name'], PATHINFO_EXTENSION);
					$config['file_name'] = $filename;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if ($this->upload->do_upload('profileimage')) {
						$this->Admindb->updateFilename($actorId, $filename);
						redirect('admin/actors');
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
					} else {
						echo $this->upload->display_errors();
						// array_push($notUplFiles, $originalFileName);
					}
				}
			}
		}
		$data['page'] = 'actor-add';
		$data['genders'] = $this->Admindb->getActorCategories();
		$this->load->view('admin/actor-add', $data);
	}

	public function sortActors()
	{
		$actors = $_POST['actors'];
		$arr = [];
		for ($i = 0; $i < count($actors); $i++) {
			array_push($arr, [
				'id' => $actors[$i], // id (where condition)
				'sort' => $i + 1 // update value (several)
			]);
		}
		$this->Admindb->batchUpdateActors($arr);
		redirect('admin/actors');
	}

	public function editActor($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			$voiceLanguages = $this->Admindb->getActorVoices($id);
			$voiceCategories = $this->Admindb->getVoiceCategories();
			if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
				$this->form_validation->set_rules('name', 'სახელი', 'trim|required');
				$this->form_validation->set_rules('gender', 'სქესი', 'integer|required');
				$this->form_validation->set_rules('vid', 'Voice ID', 'required|max_length[10]');

				// Add voice language validation check if any of voices is present 
				foreach ($voiceLanguages as $voiceLang) {
					$hasFiles = false;
					foreach ($voiceCategories as $voiceCat) {
						if ($_FILES['voice']['name'][$voiceLang->id][$voiceCat->id]) {
							$hasFiles = true;
						}
					}
					if ($hasFiles) {
						$this->form_validation->set_rules('voice_price[' . $voiceLang->id . ']', 'ხმის ფასი ' . $voiceLang->name_ge, 'integer|required|greater_than[0]');
					}
				}

				if ($this->form_validation->run()) {
					// Profile data update - get profile data and check for profile image
					$editArr = [];
					$editArr['name'] = $this->input->post('name', true);
					$editArr['vid'] = $this->input->post('vid', true);
					$editArr['gender_id'] = $this->input->post('gender');					
					$this->Admindb->updateActor($id, $editArr);
					// if profile image is present load library and upload
					if ($_FILES['profileImage']['name']) {
						$config = $this->config->item('fileUploadConfig');
						$config['upload_path'] = 'assets/images/actors/';
						$filename = 'actor' . str_pad($id, 4, "0", STR_PAD_LEFT) . '.' . pathinfo($_FILES['profileImage']['name'], PATHINFO_EXTENSION);
						$config['file_name'] = $filename;
						$this->load->library('upload', $config, 'profileImage');
						$this->profileImage->initialize($config);
						$this->profileImage->do_upload('profileImage');
						$this->Admindb->updateFilename($id, $filename);
					}

					// Voices upload
					foreach ($voiceLanguages as $voiceLang) {
						// update or insert voice language price if changed
						if ($voiceLang->langPrice != $this->input->post('voice_price[' . $voiceLang->id . ']')) {
							$this->Admindb->setVoicePrice($id, $voiceLang->id, $this->input->post('voice_price[' . $voiceLang->id . ']'));
						}
						// loop voices
						foreach ($voiceCategories as $voiceCat) {
							if (!empty($_FILES['voice']['name'][$voiceLang->id][$voiceCat->id])) {								
								// Define new $_FILES array - $_FILES['voice_']
								$filename = 'VOICE'.str_pad($id, 5, "0", STR_PAD_LEFT).str_pad($voiceLang->id, 2, "0", STR_PAD_LEFT).str_pad($voiceCat->id, 2, "0", STR_PAD_LEFT).'.'. pathinfo($_FILES['voice']['name'][$voiceLang->id][$voiceCat->id], PATHINFO_EXTENSION);
								$_FILES['voice_']['name']     = $filename;// $_FILES['voice']['name'][$voiceLang->id][$voiceCat->id];
								$_FILES['voice_']['type']     = $_FILES['voice']['type'][$voiceLang->id][$voiceCat->id];
								$_FILES['voice_']['tmp_name'] = $_FILES['voice']['tmp_name'][$voiceLang->id][$voiceCat->id];
								$_FILES['voice_']['error']    = $_FILES['voice']['error'][$voiceLang->id][$voiceCat->id];
								$_FILES['voice_']['size']     = $_FILES['voice']['size'][$voiceLang->id][$voiceCat->id];
								// Set preference
								$config = array();
								$config = $this->config->item('voiceUploadConfig');
								$config['upload_path'] = 'assets/voices/';
								// $config['file_name'] = 'assetsvoices';
								 //Load upload library
								$this->load->library('upload', $config, 'voice');
								//perform upload and insert in db
								if ($this->voice->do_upload('voice_')) {
								$this->Admindb->setActorVoice($id, $voiceLang->id, $voiceCat->id, $filename /*$_FILES['voice']['name'][$voiceLang->id][$voiceCat->id]*/);
								}
							}
						}
					}
					redirect('admin/editActor/' . $id);
				}
			}
			$data['actor'] = $this->Admindb->getActor($id);
			$data['genders'] = $this->Admindb->getActorCategories();
			$data['actorVoices'] = $voiceLanguages;
			$data['voiceCategories'] = $voiceCategories;
			$data['id'] = $id;
			$data['page'] = 'actor-edit';
			$this->load->view('admin/actor-edit', $data);
		} else {
			redirect('admin/actors');
		}
	}






	public function sliders()
	{
		$data['sliders'] = $this->Admindb->getSliders();
		$data['page'] = 'slider';
		$this->load->view('admin/sliders', $data);
	}

	public function addSlider()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
			$this->form_validation->set_rules('name_ge', 'დასახელება', 'trim|required');
			if (empty($_FILES['img_ge']['name']))
				$this->form_validation->set_rules('img_ge', 'სურათი ქართულზე', 'required');
			if (empty($_FILES['img_en']['name']))
				$this->form_validation->set_rules('img_en', 'სურათი ინგლისურზე', 'required');
			if (empty($_FILES['img_ru']['name']))
				$this->form_validation->set_rules('img_ru', 'სურათი რუსულზე', 'required');
			if ($this->form_validation->run()) {
				if ($this->Admindb->addSlider($this->input->post('name_ge', true), $_FILES['img_ge']['name'], $_FILES['img_en']['name'], $_FILES['img_ru']['name'])) {
					$config = $this->config->item('fileUploadConfig');
					$config['upload_path'] = 'assets/images/slider/';
					$this->load->library('upload');
					$this->upload->initialize($config);
					if ($this->upload->do_upload('img_ge') && $this->upload->do_upload('img_en') && $this->upload->do_upload('img_ru')) {
						redirect('admin/sliders');
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
					} else {
						// array_push($notUplFiles, $originalFileName);
					}
				}
			}
		}
		$data['page'] = 'slider-add';
		$this->load->view('admin/slider-add', $data);
	}

	public function editSlider($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
				$this->form_validation->set_rules('name_ge', 'დასახელება', 'trim|required');
				// if(empty($_FILES['partnerImage']['name']))
				// 	$this->form_validation->set_rules('partnerImage', 'სურათი', 'required');
				if ($this->form_validation->run()) {
					$editArr = [];
					$editArr['name_ge'] = $this->input->post('name_ge', true);
					if ($_FILES['img_ge']['name'])
						$editArr['img_ge'] = $_FILES['img_ge']['name'];
					if ($_FILES['img_en']['name'])
						$editArr['img_en'] = $_FILES['img_en']['name'];
					if ($_FILES['img_ru']['name'])
						$editArr['img_ru'] = $_FILES['img_ru']['name'];
					if ($this->Admindb->upateSlider($id, $editArr)) {
						$config = $this->config->item('fileUploadConfig');
						$config['upload_path'] = 'assets/images/slider/';
						$this->load->library('upload');
						$this->upload->initialize($config);
						if ($_FILES['img_ge']['name'])
							$this->upload->do_upload('img_ge');
						if ($_FILES['img_en']['name'])
							$this->upload->do_upload('img_en');
						if ($_FILES['img_ru']['name'])
							$this->upload->do_upload('img_ru');
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
						return redirect('admin/sliders');
					}
				}
			}
			$data['slider'] = $this->Admindb->getSlider($id);
			$data['id'] = $id;
			$data['page'] = 'slider-edit';
			$this->load->view('admin/slider-edit', $data);
		}
	}

	public function deleteSlider($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			$this->Admindb->deleteSlider($id);
		}
		redirect('admin/sliders');
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
				if ($this->Admindb->addPartner($this->input->post('url', true), $_FILES['partnerImage']['name'])) {
					$config = $this->config->item('fileUploadConfig');
					$config['upload_path'] = 'assets/images/partners/';
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
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
				$this->form_validation->set_rules('url', 'მისამართი', 'trim|required');
				// if(empty($_FILES['partnerImage']['name']))
				// 	$this->form_validation->set_rules('partnerImage', 'სურათი', 'required');
				if ($this->form_validation->run()) {
					$editArr = [];
					$editArr['url'] = $this->input->post('url', true);
					if ($_FILES['partnerImage']['name'])
						$editArr['img'] = $_FILES['partnerImage']['name'];
					if ($this->Admindb->updatePartner($id, $editArr)) {
						$config = $this->config->item('fileUploadConfig');
						$config['upload_path'] = $this->config->item('uploadFolder') . 'partners/';
						$this->load->library('upload');
						$this->upload->initialize($config);
						if ($_FILES['partnerImage']['name'])
							$this->upload->do_upload('partnerImage');
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
						return redirect('admin/partners');
						// } else {
						// 	// array_push($notUplFiles, $originalFileName);
						// }
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


	public function actorCategories()
	{
		$data['actorCategories'] = $this->Admindb->getActorCategories();
		$data['page'] = 'actor-categories';
		$this->load->view('admin/actor-categories', $data);
	}

	public function addActorCategory()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
			$this->form_validation->set_rules('name_ge', 'დასახელება ქართულად', 'trim|required|max_length[100]');
			$this->form_validation->set_rules('name_en', 'დასახელება ინგლისურად', 'trim|required|max_length[100]');
			$this->form_validation->set_rules('name_ru', 'დასახელება რუსულად', 'trim|required|max_length[100]');

			if ($this->form_validation->run()) {
				if ($this->Admindb->addActorCategory($this->input->post('name_ge', true), $this->input->post('name_en', true), $this->input->post('name_ru', true))) {
					redirect('admin/actorCategories');
					// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
					//array_push($oldFiles, $originalFileName);
				} else {
					// array_push($notUplFiles, $originalFileName);
				}
			}
		}
		$data['page'] = 'actor-category-add';
		$this->load->view('admin/actor-category-add', $data);
	}

	public function editActorCategory($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
				$this->form_validation->set_rules('name_ge', 'დასახელება ქართულად', 'trim|required|max_length[100]');
				$this->form_validation->set_rules('name_en', 'დასახელება ინგლისურად', 'trim|required|max_length[100]');
				$this->form_validation->set_rules('name_ru', 'დასახელება რუსულად', 'trim|required|max_length[100]');
				if ($this->form_validation->run()) {
					if ($this->Admindb->upateActorCategory($id, $this->input->post('name_ge', true), $this->input->post('name_en', true), $this->input->post('name_ru', true))) {
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
						return redirect('admin/actorCategories');
					} else {
						// array_push($notUplFiles, $originalFileName);
					}
				}
			}
			$data['actorCategory'] = $this->Admindb->getActorCategory($id);
			$data['id'] = $id;
			$data['page'] = 'actor-category-edit';
			$this->load->view('admin/actor-category-edit', $data);
		}
	}

	public function deleteActorCategory($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			$this->Admindb->deleteActorCategory($id);
		}
		redirect('admin/actorCategories');
	}


	public function voiceCategories()
	{
		$data['voiceCategories'] = $this->Admindb->getVoiceCategories();
		$data['page'] = 'voice-categories';
		$this->load->view('admin/voice-categories', $data);
	}

	public function addVoiceCategory()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
			$this->form_validation->set_rules('name_ge', 'დასახელება ქართულად', 'trim|required|max_length[100]');
			$this->form_validation->set_rules('name_en', 'დასახელება ინგლისურად', 'trim|required|max_length[100]');
			$this->form_validation->set_rules('name_ru', 'დასახელება რუსულად', 'trim|required|max_length[100]');

			if ($this->form_validation->run()) {
				if ($this->Admindb->addVoiceCategory($this->input->post('name_ge', true), $this->input->post('name_en', true), $this->input->post('name_ru', true))) {
					redirect('admin/voiceCategories');
					// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
					//array_push($oldFiles, $originalFileName);
				} else {
					// array_push($notUplFiles, $originalFileName);
				}
			}
		}
		$data['page'] = 'voice-category-add';
		$this->load->view('admin/voice-category-add', $data);
	}

	public function editVoiceCategory($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
				$this->form_validation->set_rules('name_ge', 'დასახელება ქართულად', 'trim|required|max_length[100]');
				$this->form_validation->set_rules('name_en', 'დასახელება ინგლისურად', 'trim|required|max_length[100]');
				$this->form_validation->set_rules('name_ru', 'დასახელება რუსულად', 'trim|required|max_length[100]');
				if ($this->form_validation->run()) {
					if ($this->Admindb->upateVoiceCategory($id, $this->input->post('name_ge', true), $this->input->post('name_en', true), $this->input->post('name_ru', true))) {
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
						return redirect('admin/voiceCategories');
					} else {
						// array_push($notUplFiles, $originalFileName);
					}
				}
			}
			$data['voiceCategory'] = $this->Admindb->getVoiceCategory($id);
			$data['id'] = $id;
			$data['page'] = 'voice-category-edit';
			$this->load->view('admin/voice-category-edit', $data);
		}
	}

	public function deleteVoiceCategory($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			$this->Admindb->deleteVoiceCategory($id);
		}
		redirect('admin/voiceCategories');
	}


	public function voiceLanguages()
	{
		$data['voiceLanguages'] = $this->Admindb->getVoiceLanguages();
		$data['page'] = 'voice-languages';
		$this->load->view('admin/voice-languages', $data);
	}

	public function addVoiceLanguage()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
			$this->form_validation->set_rules('name_ge', 'დასახელება ქართულად', 'trim|required|max_length[100]');
			$this->form_validation->set_rules('name_en', 'დასახელება ინგლისურად', 'trim|required|max_length[100]');
			$this->form_validation->set_rules('name_ru', 'დასახელება რუსულად', 'trim|required|max_length[100]');
			$this->form_validation->set_rules('dom', 'მოკლედ (დომენი)', 'trim|required|exact_length[2]');
			if ($this->form_validation->run()) {
				if ($this->Admindb->addVoiceCategory($this->input->post('name_ge', true), $this->input->post('name_en', true), $this->input->post('name_ru', true), $this->input->post('dom', true))) {
					redirect('admin/voiceLanguages');
					// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
					//array_push($oldFiles, $originalFileName);
				} else {
					// array_push($notUplFiles, $originalFileName);
				}
			}
		}
		$data['page'] = 'voice-language-add';
		$this->load->view('admin/voice-language-add', $data);
	}

	public function editVoiceLanguage($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
				$this->form_validation->set_rules('name_ge', 'დასახელება ქართულად', 'trim|required|max_length[100]');
				$this->form_validation->set_rules('name_en', 'დასახელება ინგლისურად', 'trim|required|max_length[100]');
				$this->form_validation->set_rules('name_ru', 'დასახელება რუსულად', 'trim|required|max_length[100]');
				$this->form_validation->set_rules('dom', 'მოკლედ (დომენი)', 'trim|required|exact_length[2]');
				if ($this->form_validation->run()) {
					if ($this->Admindb->upateVoiceLanguage($id, $this->input->post('name_ge', true), $this->input->post('name_en', true), $this->input->post('name_ru', true), $this->input->post('dom', true))) {
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
						return redirect('admin/voiceLanguages');
					} else {
						// array_push($notUplFiles, $originalFileName);
					}
				}
			}
			$data['voiceLanguage'] = $this->Admindb->getVoiceLanguage($id);
			$data['id'] = $id;
			$data['page'] = 'voice-language-edit';
			$this->load->view('admin/voice-language-edit', $data);
		}
	}

	public function deleteVoiceLanguage($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			$this->Admindb->deleteVoiceLanguage($id);
		}
		redirect('admin/voiceLanguages');
	}



	public function contact()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
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
				if ($contact)
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
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
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

				if ($_FILES['our_experience_img']['name'])
					$editArr[1]['img'] = $_FILES['our_experience_img']['name'];
				if ($_FILES['our_techbase_img']['name'])
					$editArr[2]['img'] = $_FILES['our_techbase_img']['name'];
				if ($_FILES['trust_us_img']['name'])
					$editArr[3]['img'] = $_FILES['trust_us_img']['name'];
				if ($_FILES['choose_us_img']['name'])
					$editArr[4]['img'] = $_FILES['choose_us_img']['name'];

				$this->Admindb->updateAbout($editArr);

				$config = $this->config->item('fileUploadConfig');
				$config['upload_path'] = 'assets/images/about/';
				$this->load->library('upload');
				$this->upload->initialize($config);

				if ($_FILES['our_experience_img']['name'])
					$this->upload->do_upload('our_experience_img');
				if ($_FILES['our_techbase_img']['name'])
					$this->upload->do_upload('our_techbase_img');
				if ($_FILES['trust_us_img']['name'])
					$this->upload->do_upload('trust_us_img');
				if ($_FILES['choose_us_img']['name'])
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
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
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


	public function infoaudio()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
			if($_FILES['infoaudio']['name']){
				$config = $this->config->item('fileUploadConfig');
				$config['upload_path'] = 'assets/audio/';
				$config['max_size'] = 5120;
				$config['allowed_types'] = 'mp3';
				$config['overwrite'] = TRUE;
				$config['file_name'] = 'audio.mp3';
				$this->load->library('upload');
				$this->upload->initialize($config);
				$this->upload->do_upload('infoaudio');
				redirect('admin/infoaudio');
			}
		}
		$data['page'] = 'info-audio';
		$this->load->view('admin/info-audio', $data);		
	}


	public function blogs()
	{
		$data['blogs'] = $this->Admindb->getBlogs();
		$data['page'] = 'blog';
		$this->load->view('admin/blogs', $data);
	}

	public function addBlog()
	{
		if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
			$this->form_validation->set_rules('title_ge', 'სათაური ქართულად', 'trim|required|max_length[250]');
			$this->form_validation->set_rules('title_en', 'სათაური ინგლისურად', 'trim|required|max_length[250]');
			$this->form_validation->set_rules('title_ru', 'სათაური რუსულად', 'trim|required|max_length[250]');
			$this->form_validation->set_rules('text_ge', 'ტექსტი ქართულად', 'required');
			$this->form_validation->set_rules('text_en', 'ტექსტი ინგლისურად', 'required');
			$this->form_validation->set_rules('text_ru', 'ტექსტი რუსულად', 'required');
			$this->form_validation->set_rules('tags_ge', 'ტეგები ქართულად', 'trim|required|max_length[250]');
			$this->form_validation->set_rules('tags_en', 'ტეგები ინგლისურად', 'trim|required|max_length[250]');
			$this->form_validation->set_rules('tags_ru', 'ტეგები რუსულად', 'trim|required|max_length[250]');
			$this->form_validation->set_rules('ytlink', 'Youtube ლინკი', 'trim|max_length[250]');
			if (empty($_FILES['image1']['name']))
				$this->form_validation->set_rules('image1', 'სურათი', 'required');

			if ($this->form_validation->run()) {
				$id = $this->Admindb->addBlog(
					$this->input->post('title_ge', true),
					$this->input->post('title_en', true),
					$this->input->post('title_ru', true),
					$this->input->post('text_ge', true),
					$this->input->post('text_en', true),
					$this->input->post('text_ru', true),
					$this->input->post('tags_ge', true),
					$this->input->post('tags_en', true),
					$this->input->post('tags_ru', true),
					$this->parse_ytlink($this->input->post('ytlink', true))
				);
				if ($id) {
					$filename = 'blog'.str_pad($id, 4, "0", STR_PAD_LEFT).'.'. pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
					$config = $this->config->item('fileUploadConfig');
					$config['upload_path'] ='assets/images/blogs/';
					$config['file_name'] = $filename;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image1')) {
						$this->Admindb->setBlogImage($id, $filename);
						redirect('admin/blogs');
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
					} else {
						// array_push($notUplFiles, $originalFileName);
					}
				}
			}
		}
		$data['page'] = 'blog-add';
		$this->load->view('admin/blog-add', $data);
	}

	public function editBlog($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			if (strtoupper($_SERVER["REQUEST_METHOD"]) == 'POST') {
				$this->form_validation->set_rules('title_ge', 'სათაური ქართულად', 'trim|required|max_length[250]');
				$this->form_validation->set_rules('title_en', 'სათაური ინგლისურად', 'trim|required|max_length[250]');
				$this->form_validation->set_rules('title_ru', 'სათაური რუსულად', 'trim|required|max_length[250]');
				$this->form_validation->set_rules('text_ge', 'ტექსტი ქართულად', 'required');
				$this->form_validation->set_rules('text_en', 'ტექსტი ინგლისურად', 'required');
				$this->form_validation->set_rules('text_ru', 'ტექსტი რუსულად', 'required');
				$this->form_validation->set_rules('tags_ge', 'ტეგები ქართულად', 'trim|required|max_length[250]');
				$this->form_validation->set_rules('tags_en', 'ტეგები ინგლისურად', 'trim|required|max_length[250]');
				$this->form_validation->set_rules('tags_ru', 'ტეგები რუსულად', 'trim|required|max_length[250]');
				$this->form_validation->set_rules('ytlink', 'Youtube ლინკი', 'trim|max_length[250]');
				if ($this->form_validation->run()) {
					$this->Admindb->updateBlog(
							$id,
							$this->input->post('title_ge', true),
							$this->input->post('title_en', true),
							$this->input->post('title_ru', true),
							$this->input->post('text_ge', true),
							$this->input->post('text_en', true),
							$this->input->post('text_ru', true),
							$this->input->post('tags_ge', true),
							$this->input->post('tags_en', true),
							$this->input->post('tags_ru', true),
							$this->parse_ytlink($this->input->post('ytlink', true))
					);
					// if image present
					if ($_FILES['image1']['name']){
						$filename = 'blog'.str_pad($id, 4, "0", STR_PAD_LEFT).'.'. pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
						$config = $this->config->item('fileUploadConfig');
						$config['upload_path'] ='assets/images/blogs/';
						$config['file_name'] = $filename;
						$this->load->library('upload');
						$this->upload->initialize($config);						
						if($this->upload->do_upload('image1')){
							$this->Admindb->setBlogImage($id, $filename);
						}
					}
					// {
						// array_push($newFiles, ['order_id' => $orderId, 'fileinfo_id' => $uplFile->id, 'filename' => $filename . '.' . $ext]);
						//array_push($oldFiles, $originalFileName);
					return redirect('admin/blogs');
					// } else {
						// array_push($notUplFiles, $originalFileName);
					// }
				}
			}
			$data['blogDetails'] = $this->Admindb->getBlogDetails($id);
			$data['id'] = $id;
			$data['page'] = 'blog-edit';
			$this->load->view('admin/blog-edit', $data);
		}
	}

	public function deleteblog($id)
	{
		if (filter_var($id, FILTER_VALIDATE_INT) && $id > 0) {
			$this->Admindb->deleteBlog($id);
		}
		redirect('admin/blogs');
	}


	function parse_ytlink($link){
		if(!$link) return null;
		$link = str_replace('https://youtu.be/', '', $link);
		$link = str_replace('https://www.youtube.com/watch?v=', '', $link);
		return substr($link, 0, 11);
	}

	
}
