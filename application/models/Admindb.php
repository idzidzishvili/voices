<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admindb extends CI_Model
{



   public function getContactDetails(){
		$q = "SELECT * FROM contact WHERE id=1";
		return $this->db->query($q)->row();	
	}

	public function getAboutUsDetails(){
		$q = "SELECT * FROM about";
		return $this->db->query($q)->result();	
	}


	public function updateContact($address_ge, $address_en, $address_ru, $phone, $email, $location){
		$this->db->where('id', 1)->update('contact', [
			'address_ge'	=> $address_ge,
			'address_en'	=> $address_en,
			'address_ru'	=> $address_ru,
			'phone'			=> $phone,
			'email'			=> $email,
			'location'		=> $location
		]);
		return $this->db->affected_rows();
	}

   public function getPartners(){
		$q = "SELECT * FROM partners";
		return $this->db->query($q)->result();	
	}

	public function getPartner($id){
		$q = "SELECT * FROM partners WHERE id=$id";
		return $this->db->query($q)->row();	
	}

	public function addPartner($url, $filename){
		$this->db->insert('partners', [
			'url' => $url,
			'img' => $filename,
		]);
		return $this->db->insert_id();
	}

	public function updatePartner($id, $array){
		return $this->db->where('id', $id)->update('partners', $array);
	}

	public function deletePartner($id){
		return $this->db->where('id', $id)->delete('partners');
	}

	public function getSliders(){
		$q = "SELECT * FROM slider";
		return $this->db->query($q)->result();	
	}

	public function getSlider($id){
		$q = "SELECT * FROM slider WHERE id=$id";
		return $this->db->query($q)->row();	
	}

	public function addSlider($name, $imgGe, $imgEn, $imgRu){
		$this->db->insert('slider', ['name_ge' => $name, 'img_ge' => $imgGe, 'img_en' => $imgEn, 'img_ru' => $imgRu]);
		return $this->db->insert_id();
	}

	public function upateSlider($id, $array){
		return $this->db->where('id', $id)->update('slider', $array);
	}

	public function deleteSlider($id){
		return $this->db->where('id', $id)->delete('slider');
	}

	public function updateAbout($array){
		for($i=0; $i<=4; $i++)
			$this->db->where('id', $i+1)->update('about', $array[$i]);
	}

   public function getServices(){
		$q = "SELECT * FROM services";
		return $this->db->query($q)->result();	
	}

	public function getVoiceCategories(){
		$q = "SELECT * FROM voice_categories";
		return $this->db->query($q)->result();	
	}

	public function getVoiceCategory($id){
		$q = "SELECT * FROM voice_categories WHERE id=$id";
		return $this->db->query($q)->row();	
	}

	public function addVoiceCategory($nameGe, $nameEn, $nameRu){
		$this->db->insert('voice_categories', ['name_ge' => $nameGe, 'name_en' => $nameEn, 'name_ru' => $nameRu]);
		return $this->db->insert_id();
	}

	public function upateVoiceCategory($id, $nameGe, $nameEn, $nameRu){
		return $this->db->where('id', $id)->update('voice_categories', ['name_ge' => $nameGe, 'name_en' => $nameEn, 'name_ru' => $nameRu]);
	}

	public function deleteVoiceCategory($id){
		return $this->db->where('id', $id)->delete('voice_categories');
	}

	public function getActorCategories(){
		$q = "SELECT * FROM actor_genders";
		return $this->db->query($q)->result();	
	}

	public function getActorCategory($id){
		$q = "SELECT * FROM actor_genders WHERE id=$id";
		return $this->db->query($q)->row();	
	}

	public function addActorCategory($nameGe, $nameEn, $nameRu){
		$this->db->insert('actor_genders', ['name_ge' => $nameGe, 'name_en' => $nameEn, 'name_ru' => $nameRu]);
		return $this->db->insert_id();
	}

	public function upateActorCategory($id, $nameGe, $nameEn, $nameRu){
		return $this->db->where('id', $id)->update('actor_genders', ['name_ge' => $nameGe, 'name_en' => $nameEn, 'name_ru' => $nameRu]);
	}

	public function deleteActorCategory($id){
		return $this->db->where('id', $id)->delete('actor_genders');
	}

	public function getVoiceLanguages(){
		$q = "SELECT * FROM voice_languages";
		return $this->db->query($q)->result();	
	}

	public function getVoiceLanguage($id){
		$q = "SELECT * FROM voice_languages WHERE id=$id";
		return $this->db->query($q)->row();	
	}

	public function addVoiceLanguages($nameGe, $nameEn, $nameRu, $dom){
		$this->db->insert('voice_languages', ['name_ge' => $nameGe, 'name_en' => $nameEn, 'name_ru' => $nameRu, 'dom' => strtoupper($dom)]);
		return $this->db->insert_id();
	}

	public function upateVoiceLanguage($id, $nameGe, $nameEn, $nameRu, $dom){
		return $this->db->where('id', $id)->update('voice_languages', ['name_ge' => $nameGe, 'name_en' => $nameEn, 'name_ru' => $nameRu, 'dom' => strtoupper($dom)]);
	}

	public function deleteVoiceLanguage($id){
		return $this->db->where('id', $id)->delete('voice_languages');
	}

	public function deleteActor($id){
		return $this->db->where('id', $id)->delete('actors');
	}

   public function getActors()
	{
      $query = "SELECT actors.*, COUNT(voices.actor_id) as voicesQty
					FROM actors
					LEFT JOIN voices ON actors.id=voices.actor_id 
					GROUP BY actors.id 
					ORDER BY sort";
		return $this->db->query($query)->result();
	}


	// Select actors having specific voice language
	public function getActorsVoicesLangByLangID($id, $lang)
	{
      $q = "SELECT 
					actors.*, 
					COUNT(voices.actor_id) as voicesQty, 
					actor_language_prices.price as langPrice, 
					actor_genders.name_$lang as gender
				FROM actors
				LEFT JOIN voices ON actors.id=voices.actor_id AND voices.voice_language_id=$id
				LEFT JOIN actor_language_prices ON actors.id=actor_language_prices.actor_id AND actor_language_prices.language_id=$id
				LEFT JOIN actor_genders ON actors.gender_id=actor_genders.id
				GROUP BY actors.id, langPrice
				HAVING voicesQty>0
				ORDER BY sort, id";
		$actors = $this->db->query($q)->result();

		$q = "SELECT voices.*, voice_categories.name_$lang as voicecat
				FROM voices
				LEFT JOIN voice_categories ON voices.voice_category_id=voice_categories.id
				WHERE voices.voice_language_id=$id";	
		$voices = $this->db->query($q)->result();

		$q = "SELECT actors.*,	GROUP_CONCAT(DISTINCT voice_languages.dom SEPARATOR ',') AS langs
				FROM actors 
				LEFT JOIN voices ON voices.actor_id=actors.id
				LEFT JOIN voice_languages ON voices.voice_language_id=voice_languages.id
				GROUP BY actors.id";
		$diffLangs = $this->db->query($q)->result();

		foreach($actors as $actor){
			$actor->voices = [];
			foreach($voices as $voice){
				if($actor->id == $voice->actor_id)
					array_push($actor->voices, $voice);
			}
			foreach($diffLangs as $diffLang){
				if($actor->id == $diffLang->id){
					$actor->diffLangs = $diffLang->langs;
					break;
				}
			}
		}

		return $actors;
	}

	public function batchUpdateActors($data){
		return $this->db->update_batch('actors', $data, 'id');
	}

	public function addActor($name, $gender, $vid){
		$this->db->insert('actors', ['name' => $name, 'gender_id' => $gender, 'vid' => $vid]);
		$id = $this->db->insert_id();
		$this->db->where('id', $id)->update('actors', ['sort' => $id]);
		return $id;
	}

	public function updateFilename($id, $filename)
	{
		return $this->db->where('id', $id)->update('actors', ['image' => $filename]);
	}

	public function getActor($id){
		$q = "SELECT actors.* FROM actors WHERE id=$id";
		return $this->db->query($q)->row();
	}

	public function getActorVoices($id){
		$voiceLanguages = $this->getVoiceLanguages();	

		$q = "SELECT voices.*, voice_categories.name_ge FROM voices 
				LEFT JOIN voice_categories ON voices.voice_category_id=voice_categories.id
				WHERE voices.actor_id=$id";
		$voices = $this->db->query($q)->result();

		$q = "SELECT * FROM actor_language_prices WHERE actor_id=$id";
		$langPrices = $this->db->query($q)->result();

		foreach($voiceLanguages as $voiceLang){
			$voiceLang->userVoices = [];
			$voiceLang->langPrice = 0;
			foreach($voices as $voice){
				if($voiceLang->id == $voice->voice_language_id){
					$voiceLang->userVoices[$voice->voice_category_id] = $voice;
				}
			}
			foreach($langPrices as $langPrice){
				if($voiceLang->id == $langPrice->language_id){
					$voiceLang->langPrice = $langPrice->price;
				}
			}
		}
		return $voiceLanguages;
	}


	public function updateActor($id, $array){
		return $this->db->where('id', $id)->update('actors', $array);
	}

	public function setVoicePrice($actor_id, $language_id, $price){
		if ($this->db->where('actor_id', $actor_id)->where('language_id', $language_id)->get('actor_language_prices')->num_rows()){
			$this->db->where('actor_id', $actor_id)->where('language_id', $language_id)->update('actor_language_prices', ['price' => $price]);
		} else {
			$this->db->insert('actor_language_prices', ['actor_id' => $actor_id, 'language_id' => $language_id, 'price' => $price]);
		}
	}

	public function setActorVoice($actor_id, $voice_language_id, $voice_category_id, $filename){
		if ($this->db->where('actor_id', $actor_id)->where('voice_language_id', $voice_language_id)->where('voice_category_id', $voice_category_id)->get('voices')->num_rows()){
			$this->db->where('actor_id', $actor_id)->where('voice_language_id', $voice_language_id)->where('voice_category_id', $voice_category_id)->update('voices', ['filename' => $filename]);
		} else {
			$this->db->insert('voices', ['actor_id' => $actor_id, 'voice_language_id' => $voice_language_id, 'voice_category_id' => $voice_category_id, 'filename' => $filename]);
		}
	}

	public function getBlogs(){
		$q = "SELECT * FROM blogs";
		return $this->db->query($q)->result();
	}

	public function addBlog($titleGe, $titleEn, $titleRu, $textGe, $textEn, $textRu, $tagsGe, $tagsEn, $tagsRu, $ytlink){
		$this->db->insert('blogs', [
			'title_ge' => $titleGe, 
			'title_en' => $titleEn, 
			'title_ru' => $titleRu, 
			'text_ge' => $textGe, 
			'text_en' => $textEn, 
			'text_ru' => $textRu,
			'ytlink' => $ytlink
		]);
		$id = $this->db->insert_id();

		$data = [];
		foreach(explode(',', $tagsGe) as $tag)
			array_push($data, ['blog_id' => $id, 'tag' => trim($tag), 'tag_language' => 'ge']);
		foreach(explode(',', $tagsEn) as $tag)
			array_push($data, ['blog_id' => $id, 'tag' => trim($tag), 'tag_language' => 'en']);
		foreach(explode(',', $tagsRu) as $tag)
			array_push($data, ['blog_id' => $id, 'tag' => trim($tag), 'tag_language' => 'ru']);
		$this->db->insert_batch('blog_tags', $data); 

		return $id;
	}

	public function setBlogImage($id, $imageName){
		$this->db->where('id', $id)->update('blogs', ['image1' => $imageName]);
	}


	public function getBlogDetails($id){
		$q1 = "SELECT tag_language, GROUP_CONCAT(tag SEPARATOR ', ') AS tags
				FROM blog_tags
				Where blog_id=$id			
				GROUP BY tag_language";
		$tags = $this->db->query($q1)->result();

		$q = "SELECT * FROM blogs WHERE id=$id";
		$blogDetails = $this->db->query($q)->row();

		foreach($tags as $tag)
			$blogDetails->{'tags_'.$tag->tag_language} = $tag->tags;

		return $blogDetails;
	}


	public function updateBlog($id, $titleGe, $titleEn, $titleRu, $textGe, $textEn, $textRu, $tagsGe, $tagsEn, $tagsRu, $ytlink){
		$this->db->where('id', $id)->update('blogs', [
			'title_ge' => $titleGe, 
			'title_en' => $titleEn, 
			'title_ru' => $titleRu, 
			'text_ge' => $textGe, 
			'text_en' => $textEn, 
			'text_ru' => $textRu,
			'ytlink' => $ytlink
		]);

		$this->db->where('blog_id', $id)->delete('blog_tags');

		$data = [];
		foreach(explode(',', $tagsGe) as $tag)
			array_push($data, ['blog_id' => $id, 'tag' => trim($tag), 'tag_language' => 'ge']);
		foreach(explode(',', $tagsEn) as $tag)
			array_push($data, ['blog_id' => $id, 'tag' => trim($tag), 'tag_language' => 'en']);
		foreach(explode(',', $tagsRu) as $tag)
			array_push($data, ['blog_id' => $id, 'tag' => trim($tag), 'tag_language' => 'ru']);
		$this->db->insert_batch('blog_tags', $data);
	}

	public function deleteBlog($id){
		$this->db->where('id', $id)->delete('blogs');
	}





}