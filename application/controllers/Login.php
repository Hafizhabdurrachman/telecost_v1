<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('M_login');
	
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) { //ngecek udah login belum, kalau sudah kemabli ke halaman admin

				if ($_SESSION['level']=='User') {
					redirect('User');
				}
			
		} else {
				$this->load->view('login'); 
		} 
	}

	function do_login() {
		include 'Koneksi.php';
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$cek = $this->M_login->cek_user($username, $password);
		if (count($cek) > 0 ) { 
			$sql = mysqli_query($connect,"SELECT * from user where username = '$username' and password = '$password' ");
			while ($kolom = mysqli_fetch_array($sql)) {

			$cek_type = $this->db->get_where('user', array('username'=> $username,'password'=>$password));
			foreach ($cek_type->result() as $cek) {
				if ($cek->level=='User') {

					$this->session->set_userdata(array(
					'isLogin' => TRUE, //set data telah login atau belum
					'username' => $username, //set session username
					'password' => $password,
					'nama' => $cek->nama,
					'batas_daya' => $cek->batas_daya,
					'token' => $cek->token,
					'level' => $cek->level,

					));

					redirect('User');
				}
			
			  }	
		  }		
		}
		else {
			$this->session->set_flashdata('gagallogin','Maaf, Username atau Password yang anda masukkan salah');
			$this->load->view('login');
		}

	}

	

}
