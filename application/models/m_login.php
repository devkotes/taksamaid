<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	function cek_login($table, $where){
		return $this->db->get_where($table,$where);
	}

	function updatePassword($where){
		$this->db->where('user_id', '1');
		return $this->db->update('user', $where);

	}
}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */