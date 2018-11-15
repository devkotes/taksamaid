<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {
	function getRegisterNo(){
		$this->db->select('RIGHT(register.register_id,4) as kode', FALSE);
		$this->db->order_by('register_id','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('register');  //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		  //cek kode jika telah tersedia    
		  $data = $query->row();      
		  $ck = intval($data->kode) + 1; 
		}
		else{      
		  $ck = 1;  //cek jika kode belum terdapat pada table
		}
		$tgl=date('ymd'); 
		$batas = str_pad($ck, 4, "0", STR_PAD_LEFT);    
		$kodetampil = "REG".$tgl.$batas;  //format kode
		return $kodetampil;  
	}

	function getReligion(){
		 $this->db->select('*');
		 $this->db->from('religion');
		 $query = $this->db->get();
		 return $query->result();
	}

	function getDepartment(){
		$this->db->select('*');
		 $this->db->from('department');
		 $query = $this->db->get();
		 return $query->result();
	}

	function saveRegister($table, $data){
   			return $this->db->insert($table,$data);
	}	

	//untuk admin


	function getRegister(){
		 $this->db->select('*');
		 $this->db->from('register');
		 $this->db->join('status', 'status.status_id = register.status_id');
		 $this->db->order_by('start_dtm', 'DESC');
		 $query = $this->db->get();
		 return $query->result();	
	}

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

	function sendConfirm($id){
		//echo $id;
		$this->db->set('status_id', '1');  
		$this->db->where('no_register', $id); 
		$query = $this->db->update('register'); 
	}



}

/* End of file m_register.php */
/* Location: ./application/models/m_register.php */