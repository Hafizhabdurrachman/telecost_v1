<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rangkaian extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('M_crud');
	
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					$query1= $this->db->query("SELECT * from lampu where kode='ld' and token='".$_SESSION['token']."' ")->row();
					$data['status_1'] = $query1->status;
					$data['biaya_1'] = $query1->biaya;
					$query2= $this->db->query("SELECT * from lampu where kode='lkt1' and token='".$_SESSION['token']."' ")->row();
					$data['status_2'] = $query2->status;
					$data['biaya_2'] = $query2->biaya;
					$query3= $this->db->query("SELECT * from lampu where kode='lkt2' and token='".$_SESSION['token']."' ")->row();
					$data['status_3'] = $query3->status;
					$data['biaya_3'] = $query3->biaya;
					$query4= $this->db->query("SELECT * from lampu where kode='lrm' and token='".$_SESSION['token']."' ")->row();
					$data['status_4'] = $query4->status;
					$data['biaya_4'] = $query4->biaya;
					$query5= $this->db->query("SELECT * from lampu where kode='lkm1' and token='".$_SESSION['token']."' ")->row();
					$data['status_5'] = $query5->status;
					$data['biaya_5'] = $query5->biaya;
					$query6= $this->db->query("SELECT * from lampu where kode='lrk' and token='".$_SESSION['token']."' ")->row();
					$data['status_6'] = $query6->status;
					$data['biaya_6'] = $query6->biaya;
					$query7= $this->db->query("SELECT * from lampu where kode='lrt' and token='".$_SESSION['token']."' ")->row();
					$data['status_7'] = $query7->status;
					$data['biaya_7'] = $query7->biaya;
					$data['biaya_total'] = $query1->biaya + $query2->biaya + $query3->biaya + $query4->biaya + $query5->biaya + $query6->biaya + $query7->biaya;
					}
					$this->template->load('user/static','user/rangkaian',$data);
				

		} else {
			redirect('Login');
		}
	}	

	public function lampu_dapur()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					date_default_timezone_set('Asia/Jakarta'); 
					$waktu = date("H:i:s");
					$status_update_1 = $this->input->post('status_1');
					if ($status_update_1=='0') {
						$data = array(
						'status' => '1',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'ld'
						);
					}
					else{
						$data = array(
						'status' => '0',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'ld'
						);

					}
					$this->M_crud->update_data($where,$data,'lampu');
					redirect('Rangkaian');
				}

		} else {
			redirect('Login');
		}
	}	

	public function lampu_kt1()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					date_default_timezone_set('Asia/Jakarta'); 
					$waktu = date("H:i:s");
					$status_update_2 = $this->input->post('status_2');
					if ($status_update_2=='0') {
						$data = array(
						'status' => '1',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lkt1'
						);
					}
					else{
						$data = array(
						'status' => '0',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lkt1'
						);

					}
					$this->M_crud->update_data($where,$data,'lampu');
					redirect('Rangkaian');
				}

		} else {
			redirect('Login');
		}
	}

	public function lampu_kt2()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					date_default_timezone_set('Asia/Jakarta'); 
					$waktu = date("H:i:s");
					$status_update_3 = $this->input->post('status_3');
					if ($status_update_3=='0') {
						$data = array(
						'status' => '1',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lkt2'
						);
					}
					else{
						$data = array(
						'status' => '0',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lkt2'
						);

					}
					$this->M_crud->update_data($where,$data,'lampu');
					redirect('Rangkaian');
				}

		} else {
			redirect('Login');
		}
	}

	public function lampu_rm()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					date_default_timezone_set('Asia/Jakarta'); 
					$waktu = date("H:i:s");
					$status_update_4 = $this->input->post('status_4');
					if ($status_update_4=='0') {
						$data = array(
						'status' => '1',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lrm'
						);
					}
					else{
						$data = array(
						'status' => '0',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lrm'
						);

					}
					$this->M_crud->update_data($where,$data,'lampu');
					redirect('Rangkaian');
				}

		} else {
			redirect('Login');
		}
	}

	public function lampu_km()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					date_default_timezone_set('Asia/Jakarta'); 
					$waktu = date("H:i:s");
					$status_update_5 = $this->input->post('status_5');
					if ($status_update_5=='0') {
						$data = array(
						'status' => '1',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lkm1'
						);
					}
					else{
						$data = array(
						'status' => '0',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lkm1'
						);

					}
					$this->M_crud->update_data($where,$data,'lampu');
					redirect('Rangkaian');
				}

		} else {
			redirect('Login');
		}
	}

	public function lampu_rk()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					date_default_timezone_set('Asia/Jakarta'); 
					$waktu = date("H:i:s");
					$status_update_6 = $this->input->post('status_6');
					if ($status_update_6=='0') {
						$data = array(
						'status' => '1',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lrk'
						);
					}
					else{
						$data = array(
						'status' => '0',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lrk'
						);

					}
					$this->M_crud->update_data($where,$data,'lampu');
					redirect('Rangkaian');
				}

		} else {
			redirect('Login');
		}
	}

	public function lampu_rt()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					date_default_timezone_set('Asia/Jakarta'); 
					$waktu = date("H:i:s");
					$status_update_7 = $this->input->post('status_7');
					if ($status_update_7=='0') {
						$data = array(
						'status' => '1',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lrt'
						);
					}
					else{
						$data = array(
						'status' => '0',
						'update_time' => $waktu
						);

						$where = array(
							'kode' => 'lrt'
						);

					}
					$this->M_crud->update_data($where,$data,'lampu');
					redirect('Rangkaian');
				}

		} else {
			redirect('Login');
		}
	}

	public function hitung_biaya()
	{
		date_default_timezone_set('Asia/Jakarta'); 
		for ($i=1; $i <= 7 ; $i++) { 
			$query[$i]= $this->db->query("SELECT * from lampu where id='$i' and token='".$_SESSION['token']."' ")->row();
			$selisih[$i] = strtotime(date("H:i:s"))-strtotime($query[$i]->update_time);
			if ($query[$i]->status=='0' && $selisih[$i] <= 180) {
				$biaya[$i] = ((180-$selisih[$i])/3600) * ($query[$i]->daya/1000) * 1467.28; 
			}
			elseif ($query[$i]->status == '0' && $selisih[$i] > 180) {
				$biaya[$i] = 0;
			}
			elseif ($query[$i]->status == '1' && $selisih[$i] <= 180) {
				$biaya[$i] = ($selisih[$i]/3600) * ($query[$i]->daya/1000) * 1467.28; 
			}
			elseif ($query[$i]->status == '1' && $selisih[$i] > 180) {
				$biaya[$i] = (180/3600) * ($query[$i]->daya/1000) * 1467.28;
			}
			
			$biaya_akhir[$i] = $query[$i]->biaya + $biaya[$i];

			$data = array(
			'biaya' => $biaya_akhir[$i]
			);

			$where = array(
				'id' => $i
			);

			$this->M_crud->update_data($where,$data,'lampu');
		}
	}
	
}

