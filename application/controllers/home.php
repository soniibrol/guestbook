<?php

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('home_m');
	}

	public function index(){
		$this->load->view('home_view');
	}

	/** method submit berfungsi untuk proses submit data guestbook **/
	public function submit(){
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|email');
		$this->form_validation->set_rules('message','Message','required');

		$data = array();

		if($this->form_validation->run()==false){
			$data['success'] = 0; //success = 0 berarti status submit gagal karena form gagal di validasi oleh CI
		}else{
			$data_guestbook = array(
					'name' => $_POST['name'],
					'email' => $_POST['email'],
					'message' => $_POST['message'],
					'time_posted' => date('Y-m-d H:i:s')
				);
			$this->home_m->save($data_guestbook);

			$data['success'] = 1; //berarti status submit sukses menyimpan data ke dalam database
		}

		echo json_encode($data);
	}

	/** method loadMessage berfungsi untuk merequest data guestbook untuk ditampilkan **/
	/** parameter $last digunakan untuk menyatakan apakah data yg akan di load hanya 1 data terakhir atau seluruh data guestbook **/
	public function loadMessage($last=false){
		$data = array();

		if($last==true){
			$tmp = $this->home_m->loadMessage(true)->result_array();
		}else{
			$tmp = $this->home_m->loadMessage()->result_array();
		}

		$i=0;
		foreach ($tmp as $row) {
			$data['messages'][$i]['id'] = $row['id'];
			$data['messages'][$i]['name'] = $row['name'];
			$data['messages'][$i]['email'] = $row['email'];
			$data['messages'][$i]['message'] = $row['message'];
			
			$selisih = strtotime(date('Y-m-d H:i:s')) - strtotime($row['time_posted']); //menghitung selisih waktu
			$data['messages'][$i]['time_posted'] = $this->convert_time($selisih); //mengkonversi selisih waktu
			$i++;
		}

		echo json_encode($data);
	}

	/** method convert time digunakan untuk mengkonversi waktu dalam detik ke dalam satuan menit,jam,hari,dsb **/
	private function convert_time($seconds){
		if($seconds >= 60*60*24*30*12){
			$tmp = floor($seconds / (60*60*24*30*12));
			$result = $tmp.' years ago';
		}elseif($seconds >= 60*60*24*30){
			$tmp = floor($seconds / (60*60*24*30));
			$result = $tmp.' months ago';
		}elseif($seconds >= 60*60*24){
			$tmp = floor($seconds / (60*60*24));
			$result = $tmp.' days ago';
		}elseif($seconds >= 60*60){
			$tmp = floor($seconds / (60*60));
			$result = $tmp.' hours ago';
		}elseif($seconds >= 60){
			$tmp = floor($seconds / 60);
			$result = $tmp.' minutes ago';
		}else{
			$tmp = $seconds;
			$result = $tmp.' seconds ago';
		}

		return $result;
	}
}