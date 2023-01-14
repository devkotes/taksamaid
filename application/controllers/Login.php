<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		// TESTING CODE in VSCODE ONLINE COMMIT & PUSh
		$this->load->view('template/login');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			 );
		$cek = $this->m_login->cek_login('user', $where)->num_rows();

		if ($cek > 0 ) {
			$data_session = array(
				'nama' => $username, 
				'status' => 'login'
			);
			
			$this->session->set_userdata( $data_session );
			redirect(base_url('admin'));
		}else{
			echo "Username dan Password Salah <br />";
			print_r($where);

		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */