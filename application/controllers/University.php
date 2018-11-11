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
		$data = array(
			'rg' => $this->m_register->getReligion(),
			'dp' => $this->m_register->getDepartment(),
			'no_reg' => $this->m_register->getRegisterNo()
			 );
		$this->load->view('register',$data);

	}

	function addRegister(){
		$no_reg = $this->input->post('no_reg');
		$email = $this->input->post('email');
		$nik = $this->input->post('nik');
		$name = $this->input->post('name');
		$birthplace = $this->input->post('birthplace');
		$birthday = $this->input->post('birthday');
		$gender = $this->input->post('gender');
		$religion = $this->input->post('religion');
		$address = $this->input->post('address');
		$telp = $this->input->post('telepon');
		$department = $this->input->post('dep');
		$data = array(
			'nik'				=> $nik,
			'name' 				=> $name,
			'no_register'		=> $no_reg,
			'email' 			=> $email,
			'birthplace' 		=> $birthplace,
			'birthday' 			=> $birthday,
			'gender' 			=> $gender,
			'religion_id' 		=> $religion,
			'address'			=> $address,
			'telp'				=> $telp,
			'department_id' 	=> $department,
			'start_dtm'			=> date('Y-m-d H:i:s')
		);
		//print_r($data);
		$save = $this->saveRegister('register',$data);
		/*if ($save) {
		        $config = [
		               'useragent' => 'CodeIgniter',
		               'protocol'  => 'smtp',
		               'mailpath'  => '/usr/sbin/sendmail',
		               'smtp_host' => 'ssl://smtp.gmail.com',
		               'smtp_user' => 'ansor.university@gmail.com',
		               'smtp_pass' => 'test#123',
		               'smtp_port' => 465,
		               'smtp_keepalive' => TRUE,
		               'smtp_crypto' => 'SSL',
		               'wordwrap'  => TRUE,
		               'wrapchars' => 80,
		               'mailtype'  => 'html',
		              // 'charset'   => 'utf-8',
		               'charset'   => 'iso-8859-1',
		               'validate'  => TRUE,
		               'crlf'      => "\r\n",
		               'newline'   => "\r\n",
		           ];
		        $this->load->library('email', $config);
		        $this->email->from('ansor.university@gmail.com', 'Admin Ansor University');
		        $this->email->to($email);
		        $this->email->subject('Test Kirim Email');

		        $body = $this->load->view('email', $data, TRUE);

		        $this->email->message($body);
		        if ($this->email->send()) {
		            echo 'Sukses! email berhasil dikirim.';
		        } else {
		            echo 'Error! email tidak dapat dikirim.';
		        }
		}else{
			echo "Email tidak terkirim";
		}*/
		
	}

	function saveRegister($table, $data){
		return $this->m_register->saveRegister($table,$data);
	}
}

/* End of file University.php */
/* Location: ./application/controllers/University.php */