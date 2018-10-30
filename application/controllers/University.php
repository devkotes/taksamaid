<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_register');
	}

	public function index()
	{
		$this->load->view('index');
	}

	function register(){
		$this->load->view('pmb');
	}

	function saveRegister(){
		//header('Content-Type: application/json');
		$data = array(
			'nik'			=> $this->input->post('nik'),
			'name' 			=> $this->input->post('name'),
			'email' 		=> $this->input->post('email'),
			'birthplace' 	=> $this->input->post('tempat_lahir'),
			'birthday' 		=> $this->input->post('tgl_lahir'),
			'gender' 		=> $this->input->post('jk'),
			'religion' 		=> $this->input->post('agama'),
			'address'		=> $this->input->post('alamat'),
			'telp'			=> $this->input->post('telepon')
		);

		$data2 = array(
			'lulusan' =>  $this->input->post('lulusan'),
			'SA' => $this->input->post('SA'),
			'alamatSA' => $this->input->post('alamatSA'),
			'jurusan' => $this->input->post('jurusan')
		);
		//print_r($data);
		$this->saveRegisterDetail('register_detail',$data);
		
	}

	function saveRegisterDetail($table, $data){
		return $this->m_register->saveRegister($table,$data);
	}

}

/* End of file University.php */
/* Location: ./application/controllers/University.php */