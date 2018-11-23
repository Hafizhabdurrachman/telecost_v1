<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
		parent:: __construct();
		/*$this->load->model('M_crud');*/
	
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')== TRUE) {
					
				if ($_SESSION['level']=='User') {
					/*$data['users'] = $this->M_crud->getAll('user');*/
					$this->template->load('user/static','user/dashboard');
				}

		} else {
			redirect('Login');
		}
	}	
	
}

