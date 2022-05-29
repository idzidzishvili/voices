<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actor extends CI_Model
{


   public function getActors()
	{
      $query = "SELECT actors.*, COUNT(voices.actor_id) as voicesQty
					FROM actors
					LEFT JOIN voices ON actors.id=voices.actor_id 
					GROUP BY actors.id 
					ORDER BY sort";
		return $this->db->query($query)->result();
	}




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

	public function getActorSoundByLangid($actorId, $voiceLangId, $siteLang){
		$q = "SELECT voices.voice_category_id, voices.filename, voice_categories.name_$siteLang as voiceCat
				FROM voices
				LEFT JOIN voice_categories ON voice_categories.id = voices.voice_category_id
				WHERE actor_id = $actorId AND voice_language_id = $voiceLangId
				ORDER BY voices.voice_category_id";
		return $this->db->query($q)->result();	
	}


}
