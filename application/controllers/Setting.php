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
		echo json_encode($_POST);

	}


}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */