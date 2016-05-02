<?php
	class Rekening_model extends CI_Model {
	var $table = 'rekening';
	var $details;

	public function insert_rekening($data){	
		$insert = $this->db->insert('rekening', $data); 
   		return $insert;
   			 
	}
	
    public function menampilkan_rekening() {
		$this->db->where('id_user', $this->session->userdata('id_user'));
		return $this->db->get('rekening')->result();
    }

}
?>