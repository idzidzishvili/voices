<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admindb extends CI_Model
{



   public function getContactDetails(){
		$q = "SELECT * FROM contact WHERE id=1";
		return $this->db->query($q)->row();	
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
				ORDER BY sort";
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

	



	





















   public function addOrder($userId, $clientName, $persNumber, $destination, $orderPrice, $orderCurrency, $orderType, $orderDate, $flightDate, $comment)
	{
      $data = array(
         'user_id' => $userId, 
         'client_name' => $clientName, 
         'personal_number' => $persNumber,
         'destination' => $destination,
         'order_price' => $orderPrice,
         'order_currency' => $orderCurrency,
         'order_type' => $orderType,
         'order_date' => $orderDate,
         'flight_date' => $flightDate,
         'order_comment' => $comment
      );
		$this->db->insert('orders', $data);
		return $this->db->insert_id();
   }


	public function getOrders($id=0)
	{
		$lang = $this->lang->lang();
		$this->db->select("U.username, O.id, O.client_name, O.personal_number, O.destination, O.order_price, O.flight_date, 
				C.currency_$lang AS currency, OT.ordertype_$lang AS order_type, O.order_date, O.order_comment, SUM(E.exp_amount) AS expenses")
			->from('orders AS O')
			->join('users AS U', 'O.user_id=U.id')
			->join('optcurrencies AS C', 'O.order_currency=C.id')
			->join('optordertypes AS OT', 'O.order_type=OT.id')
			->join('expenses AS E', 'O.id=E.order_id', 'left')
			->group_by('O.id')
			;
			if($id) $this->db->where('O.user_id', $id);
			$this->db->order_by('O.id', 'DESC');
			return $this->db->get()->result();
	}

/*
	public function getLimitedOrders($inCharge, $fullname, $personalNumber, $date_start, $date_end, $flightDate_start, $flightDate_end, $limit, $start)
	{
		$lang = $this->lang->lang();
		$this->db->select("U.username, O.id, O.client_name, O.personal_number, O.destination, O.order_price, O.flight_date, 
				C.currency_$lang AS currency, OT.ordertype_$lang AS order_type, O.order_date, O.order_comment, SUM(E.exp_amount) AS expenses")
			->from('orders AS O')
			->join('users AS U', 'O.user_id=U.id')
			->join('optcurrencies AS C', 'O.order_currency=C.id')
			->join('optordertypes AS OT', 'O.order_type=OT.id')
			->join('expenses AS E', 'O.id=E.order_id', 'left')
			->group_by('O.id')
			->order_by('O.id', 'DESC');
			;
			if($inCharge) $this->db->where('O.user_id', $inCharge);
			if($fullname) $this->db->like('O.client_name', $fullname);
			if($personalNumber) $this->db->where('O.personal_number', $personalNumber);
			if($date_start) $this->db->where('O.order_date >=', $date_start);
			if($date_end) $this->db->where('O.order_date <=', $date_end);
			if($flightDate_start) $this->db->where('O.flight_date >=', $flightDate_start);
			if($flightDate_end) $this->db->where('O.flight_date <=', $flightDate_end);
			$this->db->limit($limit, $start);
			return $this->db->get()->result();
	}

	public function getFilteredOrdersCount($inCharge, $fullname, $personalNumber, $date_start, $date_end, $flightDate_start, $flightDate_end)
	{
		$lang = $this->lang->lang();
		$this->db->select("U.username, O.id, O.client_name, O.personal_number, O.destination, O.order_price, O.flight_date, 
				C.currency_$lang AS currency, OT.ordertype_$lang AS order_type, O.order_date, O.order_comment, SUM(E.exp_amount) AS expenses")
			->from('orders AS O')
			->join('users AS U', 'O.user_id=U.id')
			->join('optcurrencies AS C', 'O.order_currency=C.id')
			->join('optordertypes AS OT', 'O.order_type=OT.id')
			->join('expenses AS E', 'O.id=E.order_id', 'left')
			->group_by('O.id')
			->order_by('O.id', 'DESC');
			;
			if($inCharge) $this->db->where('O.user_id', $inCharge);
			if($fullname) $this->db->like('O.client_name', $fullname);
			if($personalNumber) $this->db->where('O.personal_number', $personalNumber);
			if($date_start) $this->db->where('O.order_date >=', $date_start);
			if($date_end) $this->db->where('O.order_date <=', $date_end);
			if($flightDate_start) $this->db->where('O.flight_date >=', $flightDate_start);
			if($flightDate_end) $this->db->where('O.flight_date <=', $flightDate_end);
			return $this->db->count_all_results();
	}
*/

	public function getLimitedOrders($inCharge, $fullname, $personalNumber, $date_start, $date_end, $flightDate_start, $flightDate_end, $limit, $start)
	{
		
		$lang = $this->lang->lang();
		$select = "SELECT id, user_id, username, client_name, personal_number, destination, order_price, currency, order_type, otN, order_date, flight_date, order_comment, paid,
			GROUP_CONCAT(exp_curr separator ', ') as full_expense 
			FROM (
				select U.username, O.id, O.user_id, O.client_name, O.personal_number, O.destination, O.order_price, O.flight_date, O.order_comment, O.order_type as otN, O.paid, C.currency_$lang AS currency, 
					OT.ordertype_$lang AS order_type, O.order_date , SUM(E.exp_amount) AS expenses , 
					(select optcurrencies.currency_$lang from optcurrencies where E.exp_currency=optcurrencies.id) as expcurrency , 
					concat(SUM(E.exp_amount), ' ', (select optcurrencies.currency_$lang from optcurrencies where E.exp_currency=optcurrencies.id)) as exp_curr 
				from orders AS O 
				left join users AS U on O.user_id=U.id 
				left join optcurrencies AS C on O.order_currency=C.id 
				left join expenses AS E on O.id=E.order_id 
				left join optordertypes AS OT on O.order_type=OT.id 
				group by O.id, E.exp_currency
				) as orders2";
		$where = '';
		$groupBy = ' group by id';
		$orderBy = ' order by id DESC';
		$orderLimit = " limit $start, $limit";
		if($inCharge) $where = $where ? $where." AND user_id=$inCharge" : " WHERE user_id=$inCharge";
		if($fullname) $where = $where ? $where." AND client_name like '%$fullname%'" : " WHERE client_name like '%$fullname%'";
		if($personalNumber) $where = $where ? $where." AND personal_number=$personalNumber" : " WHERE personal_number=$personalNumber";
		if($date_start) $where = $where ? $where." AND order_date>='$date_start'" : " WHERE order_date>='$date_start'";
		if($date_end) $where = $where ? $where." AND order_date<='$date_end'" : " WHERE order_date<='$date_end'";
		if($flightDate_start) $where = $where ? $where." AND flight_date>='$flightDate_start'" : " WHERE flight_date>='$flightDate_start'";
		if($flightDate_end) $where = $where ? $where." AND flight_date<='$flightDate_end'" : " WHERE flight_date<='$flightDate_end'";
		return $this->db->query($select.$where.$groupBy.$orderBy.$orderLimit)->result();
	}


	public function getFilteredOrdersCount($inCharge, $fullname, $personalNumber, $date_start, $date_end, $flightDate_start, $flightDate_end){
		$lang = $this->lang->lang();
		$select = "SELECT id, user_id, username, client_name, personal_number, destination, order_price, currency, order_type, order_date, flight_date, order_comment, 
			GROUP_CONCAT(exp_curr separator ', ') as full_expense 
			FROM (
				select U.username, O.id, O.user_id, O.client_name, O.personal_number, O.destination, O.order_price, O.flight_date, O.order_comment , C.currency_$lang AS currency, 
					OT.ordertype_$lang AS order_type, O.order_date , SUM(E.exp_amount) AS expenses , 
					(select optcurrencies.currency_$lang from optcurrencies where E.exp_currency=optcurrencies.id) as expcurrency , 
					concat(SUM(E.exp_amount), ' ', (select optcurrencies.currency_$lang from optcurrencies where E.exp_currency=optcurrencies.id)) as exp_curr 
				from orders AS O 
				left join users AS U on O.user_id=U.id 
				left join optcurrencies AS C on O.order_currency=C.id 
				left join expenses AS E on O.id=E.order_id 
				left join optordertypes AS OT on O.order_type=OT.id 
				group by O.id, E.exp_currency
				) as orders2 ";
		$where = '';
		$groupBy = ' group by id';
		//$orderBy = ' order by id DESC';

		if($inCharge) $where = $where ? $where." AND user_id=$inCharge" : " WHERE user_id=$inCharge";
		if($fullname) $where = $where ? $where." AND client_name like '%$fullname%'" : " WHERE client_name like '%$fullname%'";
		if($personalNumber) $where = $where ? $where." AND personal_number=$personalNumber" : " WHERE personal_number=$personalNumber";
		if($date_start) $where = $where ? $where." AND order_date>='$date_start'" : " WHERE order_date>='$date_start'";
		if($date_end) $where = $where ? $where." AND order_date<='$date_end'" : " WHERE order_date<='$date_end'";
		if($flightDate_start) $where = $where ? $where." AND flight_date>='$flightDate_start'" : " WHERE flight_date>='$flightDate_start'";
		if($flightDate_end) $where = $where ? $where." AND flight_date<='$flightDate_end'" : " WHERE flight_date<='$flightDate_end'";
		return count($this->db->query($select.$where.$groupBy)->result());
	}







	public function getOrdersForExport($inCharge, $fullname, $personalNumber, $date_start, $date_end, $flightDate_start, $flightDate_end)
	{
		$lang = $this->lang->lang();
		$select = "SELECT id, user_id, username, client_name, personal_number, destination, order_price, currency, order_type, order_date, flight_date, order_comment, 
			GROUP_CONCAT(exp_curr separator ', ') as full_expense 
			FROM (
				select U.username, O.id, O.user_id, O.client_name, O.personal_number, O.destination, O.order_price, O.flight_date, O.order_comment , C.currency_$lang AS currency, 
					OT.ordertype_$lang AS order_type, O.order_date , SUM(E.exp_amount) AS expenses , 
					(select optcurrencies.currency_$lang from optcurrencies where E.exp_currency=optcurrencies.id) as expcurrency , 
					concat(SUM(E.exp_amount), ' ', (select optcurrencies.currency_$lang from optcurrencies where E.exp_currency=optcurrencies.id)) as exp_curr 
				from orders AS O 
				left join users AS U on O.user_id=U.id 
				left join optcurrencies AS C on O.order_currency=C.id 
				left join expenses AS E on O.id=E.order_id 
				left join optordertypes AS OT on O.order_type=OT.id 
				group by O.id, E.exp_currency
				) as orders2";
			$where = '';
			$groupBy = ' group by id';
			$orderBy = ' order by id DESC';
			if($inCharge) $where = $where ? $where." AND user_id=$inCharge" : " WHERE user_id=$inCharge";
			if($fullname) $where = $where ? $where." AND client_name like '%$fullname%'" : " WHERE client_name like '%$fullname%'";
			if($personalNumber) $where = $where ? $where." AND personal_number=$personalNumber" : " WHERE personal_number=$personalNumber";
			if($date_start) $where = $where ? $where." AND order_date>='$date_start'" : " WHERE order_date>='$date_start'";
			if($date_end) $where = $where ? $where." AND order_date<='$date_end'" : " WHERE order_date<='$date_end'";
			if($flightDate_start) $where = $where ? $where." AND flight_date>='$flightDate_start'" : " WHERE flight_date>='$flightDate_start'";
			if($flightDate_end) $where = $where ? $where." AND flight_date<='$flightDate_end'" : " WHERE flight_date<='$flightDate_end'";
			return $this->db->query($select.$where.$groupBy.$orderBy)->result();
	}

	public function getOrderdataById($id)
	{
		return $this->db->select('*')->from('orders')->where('id', $id)->get()->row();
	}

	public function getOrderdataById2($id)
	{
		$lang = $this->lang->lang();
		return $this->db->select("orders.*, users.username, optcurrencies.currency_$lang as currency, optordertypes.ordertype_$lang as ordertype")
		->from('orders')
		->join('users', 'orders.user_id=users.id')
		->join('optcurrencies', 'orders.order_currency=optcurrencies.id')
		->join('optordertypes', 'orders.order_type=optordertypes.id')
		->where('orders.id', $id)->get()->row();
	}

	public function updateOrder($id, $userId, $clientName, $persNumber, $destination, $orderPrice, $orderCurrency, $orderType, $orderDate, $flightDate, $comment)
	{
		$this->db->where('id', $id);
		return $this->db->update(
			'orders', 
			array(
				'user_id' => $userId, 
				'client_name' => $clientName, 
				'personal_number' => $persNumber,
				'destination' => $destination,
				'order_price' => $orderPrice,
				'order_currency' => $orderCurrency,
				'order_type' => $orderType,
				'order_date' => $orderDate,
				'flight_date' => $flightDate,
				'order_comment' => $comment
			)
		);
	}

	public function updateFiles($files)
	{
		foreach($files as $file){
			if($this->db->where('order_id', $file['order_id'])->where('fileinfo_id', $file['fileinfo_id'])->get('files')->num_rows())
				$this->db->where(['order_id'=>$file['order_id'], 'fileinfo_id'=>$file['fileinfo_id']])->update('files', ['filename'=>$file['filename']]);
			else
				$this->db->insert('files', ['order_id'=>$file['order_id'], 'fileinfo_id'=>$file['fileinfo_id'], 'filename'=>$file['filename']]);
			// $this->db->where(['order_id'=>$file['order_id'], 'fileinfo_id'=>$file['fileinfo_id']]);
			// $this->db->update('files', ['filename'=>$file['filename']]);
			// if(!$this->db->affected_rows())
			// 	$this->db->insert('files', ['order_id'=>$file['order_id'], 'fileinfo_id'=>$file['fileinfo_id'], 'filename'=>$file['filename']]);
		}
	}


	public function deleteOrder($id)
	{
		return $this->db->where('id', $id)->delete('orders');
	}

	public function checkUpComingFlights(){
		// $lang = $this->lang->lang();
		// $query = "SELECT U.username, O.id, O.client_name, O.personal_number, O.destination, O.order_price, O.flight_date, 
		// 				C.currency_$lang AS currency, OT.ordertype_$lang AS order_type, O.order_date, O.order_comment 
		// 			 FROM orders AS O
		// 				JOIN users AS U ON O.user_id=U.id
		// 				JOIN optcurrencies AS C ON O.order_currency=C.id
		// 				JOIN optordertypes AS OT ON O.order_type=OT.id
		// 			 WHERE (O.flight_date < CURDATE()+3 AND O.flight_date > CURDATE())
		// 			 ORDER BY flight_date ASC";
		// return $this->db->query($query)->result();
		$lang = $this->lang->lang();
		$this->db->select("U.username, O.id, O.client_name, O.personal_number, O.destination, O.order_price, O.flight_date, 
								C.currency_$lang AS currency, OT.ordertype_$lang AS order_type, O.order_date, O.order_comment");
		$this->db->from('orders AS O');
		$this->db->join('users AS U', 'O.user_id=U.id');
		$this->db->join('optcurrencies AS C', 'O.order_currency=C.id');
		$this->db->join('optordertypes AS OT', 'O.order_type=OT.id');
		// did not work on server, locally worked
		//$this->db->where('O.flight_date < CURDATE()+3');
		//$this->db->where('O.flight_date > CURDATE()');
		$today = date("Y-m-d");
		$todayPlus3 = date('Y-m-d', strtotime($today. ' + 3 days'));
		$this->db->where('O.flight_date <', $todayPlus3);
		$this->db->where('O.flight_date >', $today);
		$this->db->order_by('O.flight_date', 'ASC');
		return $this->db->get()->result();
	}



	public function getFiles($id)
	{
		return $this->db->select('*')->from('files')->where('order_id', $id)->get()->result_array();
	}

	public function getFiles2($id)
	{
		$lang = $this->lang->lang();
		return $this->db->select("files.*, optfileinfos.fileinfo_$lang fileinfo")
		->from('files')
		->join('optfileinfos', 'files.fileinfo_id=optfileinfos.id')
		->where('files.order_id', $id)->get()->result();
	}

	public function addFiles($files)
	{
		$this->db->insert_batch('files', $files);
	}

	public function addTransaction($order_id, $status, $payment_hash, $ipay_payment_id, $status_description, $shop_order_id, $payment_method)
	{
      $data = array(
         'order_id' => $order_id, 
         'status' => $status, 
         'payment_hash' => $payment_hash,
         'ipay_payment_id' => $ipay_payment_id,
         'status_description' => $status_description,
         'shop_order_id' => $shop_order_id,
         'payment_method' => $payment_method,
         'create_dt' => date("Y-m-d H:i:s")
      );
		$this->db->insert('transactions', $data);
		return $this->db->insert_id();
   }


























}
