<?php 

class m_pesera extends CI_Model{
	function tampil_data(){
		return $this->db->get('peserta_db');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}