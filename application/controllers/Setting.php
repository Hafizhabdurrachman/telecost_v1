<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('M_crud');
	
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					$data['lampu'] = $this->M_crud->getSemua('lampu','token',$_SESSION['token']);
					$this->template->load('user/static','user/setting',$data);
				}

		} else {
			redirect('Login');
		}
	}

	public function update_daya()
	{
		$lampu[1] = $this->input->post('ld');
		$lampu[2] = $this->input->post('lkt1');
		$lampu[3] = $this->input->post('lkt2');
		$lampu[4] = $this->input->post('lrm');
		$lampu[5] = $this->input->post('lkm1');
		$lampu[6] = $this->input->post('lrk');
		$lampu[7] = $this->input->post('lrt');

		$kode[1] = 'ld';
		$kode[2] = 'lkt1';
		$kode[3] = 'lkt2';
		$kode[4] = 'lrm';
		$kode[5] = 'lkm1';
		$kode[6] = 'lrk';
		$kode[7] = 'lrt';


		for ($i=1; $i <= 7 ; $i++) { 
			$data = array(
			'daya' => $lampu[$i]
			);

			$where = array(
				'kode' => $kode[$i]
			);

			$this->M_crud->update_data($where,$data,'lampu');
		}

		
		echo '<script language="javascript">alert("Update daya lampu berhasil dilakukan"); document.location="../Setting";</script>';


		/*echo "$lampu_dapur <br> $lampu_kt1 <br> $lampu_kt2 <br> $lampu_rm <br> $lampu_km1 <br> $lampu_rk <br> $lampu_rt ";*/


	}	
	
}

