<?php

class Mcrud extends CI_Model{
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data_user(){
		return $this->db->get('user');
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}