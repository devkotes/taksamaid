<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_register');
	}

	function index()
	{
		$data = array(
			'title' => 'Setting',
			'navbar' => 'template/navbar',
			'aside' => 'template/aside',
			'content' => 'admin/setting',
			'footer'=> 'template/footer'
		);
		$this->load->view('template/index',$data);
	}

	function updatePassword(){
		
		$pass = $this->input->post('np');
		$where = array(
			'password' => md5($pass)
			 );

		$data = $this->m_login->updatePassword($where);
		echo json_encode($data);

	}


}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */