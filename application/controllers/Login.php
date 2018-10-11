<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	function aksi_login(){
		$User_Name = $this->input->post('User_Name');
		$Password = $this->input->post('Password');
		$where = array(
			'User_Name' => $User_Name,
			'Password' => md5($Password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $User_Name,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/beranda")); //dahulu ("index.php/login")

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}
