<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'navbar' => 'template/navbar',
			'aside' => 'template/aside',
			'content' => 'admin/dashboard',
			'footer'=> 'template/footer'
		);
		$this->load->view('template/index',$data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */