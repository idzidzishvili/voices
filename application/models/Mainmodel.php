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

	public function getBlogs(){
		$q = "SELECT * FROM blogs";
		return $this->db->query($q)->result();
	}


	public function getBlogDetails($id){
		$lang = $this->lang->lang();

		$q1 = "SELECT title_$lang as title, text_$lang as txt, image1, ytlink, create_dt FROM blogs WHERE id=$id";
		$blog = $this->db->query($q1)->row();

		$q2 = "SELECT blog_id, tag
				FROM blog_tags
				Where tag_language='$lang' AND blog_id=$id";
		$tags = $this->db->query($q2)->result();
		return ['blog' => $blog, 'tags' => $tags];
	}
	
	
	public function getBlogsByTag($tag){
		$tag = $this->db->escape_str($tag);
		$q = "SELECT distinct blog_id FROM blog_tags WHERE tag='$tag'";
		
		$res = $this->db->query($q)->result();
		if(!$res) return false;
		
		$blogIds = [];
		foreach ($res as $r) array_push($blogIds, $r->blog_id);
			
		$q = "SELECT * FROM blogs WHERE id in (".implode(', ', $blogIds).")";
		return  $this->db->query($q)->result();
	}


	public function getLast3Blogs($id){
		$q = "SELECT * FROM blogs WHERE id <> $id order by create_dt desc limit 3";
		return  $this->db->query($q)->result();
	}


}
