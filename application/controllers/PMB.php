<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PMB extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('m_register');
    }

	function index()
	{
		//$data['judul'] = "Penerimaan Mahasiswa Baru";
		$data = array(
			'title' => 'Penerimaan Mahasiswa Baru',
			'navbar' => 'template/navbar',
			'aside' => 'template/aside',
			'content' => 'admin/data_pmb',
			'footer'=> 'template/footer'
		);
		$this->load->view('template/index',$data);
	}

	function getData(){
		$data = $this->m_register->getRegister();
		echo json_encode($data);
	}



}

/* End of file PMB.php */
/* Location: ./application/controllers/PMB.php */