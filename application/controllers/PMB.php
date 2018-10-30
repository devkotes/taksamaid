<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PMB extends CI_Controller {

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



}

/* End of file PMB.php */
/* Location: ./application/controllers/PMB.php */