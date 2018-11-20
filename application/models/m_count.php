<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_count extends CI_Model {


	function countPMB(){
		 $sql = "Select count(no_register) as no from register";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}
	function countPMBPaid(){
		 $sql = "Select count(no_register) as no from register where status_id='1'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}
	
	function countPMBUnPaid(){
		 $sql = "Select count(no_register) as no from register where status_id='2'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}

	function countFT(){
		 $sql = "Select count(no_register) as no from register where department_id='1' OR department_id='2' OR department_id='3'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}

	function countFE(){
		 $sql = "Select count(no_register) as no from register where department_id='4' OR department_id='5' OR department_id='6'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}

	function countTI(){
		 $sql = "Select count(no_register) as no from register where department_id='1'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}

	function countTE(){
		 $sql = "Select count(no_register) as no from register where department_id='2'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}

	function countDKV(){
		 $sql = "Select count(no_register) as no from register where department_id='3'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}

	function countSI(){
		 $sql = "Select count(no_register) as no from register where department_id='4'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}

	function countSJ(){
		 $sql = "Select count(no_register) as no from register where department_id='5'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}
	function countMTK(){
		 $sql = "Select count(no_register) as no from register where department_id='6'";
		 $result = $this->db->query($sql);
		 return $result->row()->no;
	}


}

/* End of file m_count.php */
/* Location: ./application/models/m_count.php */