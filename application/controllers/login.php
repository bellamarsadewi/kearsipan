<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('masuk');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
			);

		$cek = $this->masuk->cek_login('user',$where);
		if($cek->num_rows() > 0){
 
			foreach ($cek->result() as $l) {
				$data_session = array(
										'username' => $username,
										'level' => $l->level,
										'status' => 'login' );
			}
 
			$this->session->set_userdata($data_session);
 
		}if ($this->session->userdata('level') == 'superadmin' ) {

			redirect('Welcome/dashboard');
		}else if ($this->session->userdata('level') == 'admin') {
			
			redirect('admin/dashboard');
		}else{
			echo "Username dan password salah !";
		}
	}



	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	

	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */