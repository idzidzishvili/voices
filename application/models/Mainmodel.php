<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mainmodel extends CI_Model
{

   public function getLanguagesArr()
	{
      $query = "SELECT * FROM voice_languages";
		return $this->db->query($query)->result();
	}

	public function getSliderImages($lang)
	{
		$query = "SELECT img_$lang FROM slider";
		return $this->db->query($query)->result();
	}

	public function getActiveLanguages($lang)
	{
		$query = "SELECT id, name_$lang AS lang, dom FROM voice_languages WHERE active=1";
		return $this->db->query($query)->result();
	}

	public function getGenders($lang)
	{
		$query = "SELECT id, name_$lang gender FROM actor_genders";
		return $this->db->query($query)->result();
	}

	public function getPartners()
	{
		$query = "SELECT * FROM partners";
		return $this->db->query($query)->result();
	}

	public function getAboutUs()
	{
		$query = "SELECT * FROM about";
		return $this->db->query($query)->result();
	}

	public function getServices(){
		$q = "SELECT * FROM services";
		return $this->db->query($q)->result();	
	}

	public function getContactDetails(){
		$q = "SELECT * FROM contact WHERE id=1";
		return $this->db->query($q)->row();	
	}

}
