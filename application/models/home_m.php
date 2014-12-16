<?php

class Home_m extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function save($data_guestbook){
		$this->db->insert('guestbook',$data_guestbook);
	}

	/** method loadMessage untuk mengambil data dari database **/
	/** parameter $last menyatakan apakah data yg dipanggil hanya yg terakhir atau semua data **/
	public function loadMessage($last=false){
		$this->db->select('id,name,email,message,time_posted');
		$this->db->from('guestbook');
		$this->db->order_by('id','DESC');
		if($last==true){
			$this->db->limit(1);
		}
		return $this->db->get();
	}
}