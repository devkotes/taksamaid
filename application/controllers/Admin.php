<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_register');
		$this->load->model('m_count');
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
			'footer'=> 'template/footer',
			'pmb' => $this->m_count->countPMB(),
			'paid' => $this->m_count->countPMBPaid(),
			'unpaid' => $this->m_count->countPMBUnPaid(),
			'ft' => $this->m_count->countFT(),
			'fe' => $this->m_count->countFE(),
			'ti' => $this->m_count->countTI(),
			'te' => $this->m_count->countTE(),
			'dkv' => $this->m_count->countDKV(),
			'sj' => $this->m_count->countSJ(),
			'si' => $this->m_count->countSI(),
			'mtk' => $this->m_count->countMTK()
		);
		$this->load->view('template/index',$data);
	}

	function getNotif(){
		$data = $this->m_register->getNotif();
		echo json_encode($data);
	}

	function getNotifDetail(){
		$id = $this->input->post('id');
		$data[] = $this->m_register->getNotifDetail($id);
		//echo json_encode($data);
		foreach ($data as $item) {

			echo "<tr>
					<td>Registration Number </td>
					<td width='10px'> : </td>
					<td><b>".$data[0]->no_register."</b></td>
				  </tr>
				  <tr>
					<td>Identity Number </td>
					<td width='10px'> : </td>
					<td>".$data[0]->nik."</td>
				  </tr>
				  <tr>
					<td>Full Name </td>
					<td width='10px'> : </td>
					<td>".$data[0]->name."</td>
				  </tr>
				  <tr>
					<td>Email </td>
					<td width='10px'> : </td>
					<td>".$data[0]->email."</td>
				  </tr>
				  <tr>
					<td>Temppat Lahir </td>
					<td width='10px'> : </td>
					<td>".$data[0]->birthplace."</td>
				  </tr>
				  <tr>
					<td>Tanggal Lahir </td>
					<td width='10px'> : </td>
					<td>".$data[0]->birthday."</td>
				  </tr>
				  <tr>
					<td>Jenis Kelamin </td>
					<td width='10px'> : </td>
					<td>".$data[0]->gender."</td>
				  </tr>
				  <tr>
					<td>Alamat </td>
					<td width='10px'> : </td>
					<td>".$data[0]->address."</td>
				  </tr>
				  <tr>
					<td>Jurusan </td>
					<td width='10px'> : </td>
					<td>".$data[0]->department_name."</td>
				  </tr>";


		}

		$set = $this->m_register->updateNotif($id);
		if ($set) {
			echo "berhasil";
		}else{
			echo "tidak berhasil";
		}


	}

	

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */