<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

	function saveRegister($table, $data){
		$d = array(
			'status_id' => '1', 
			'invoice_id' => '1', 
			'start_dtm' => date("Y-m-d H:i:s")
		);
		$query = $this->db->insert('register', $d);
   		$data['register_id'] =  $this->db->insert_id();
   		if($query){
   			$query2 = $this->db->insert($table,$data);
   		}else{
   			echo "Gagal";
   		}
	}	

}

/* End of file m_register.php */
/* Location: ./application/models/m_register.php */