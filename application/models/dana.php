<?php
	class Dana extends CI_Model {
	var $table = 'user';
	var $table1 = 'tarik_dana';
	var $details;

	public function select_dana(){
		$this->db->select('saldo');
		$this->db->from($this->table);
		return $this->db->get()->result();
	}

	public function insert_tarikdana($data){
		$this->db->insert($this->table1, $data); 
	}

	//fungsi untuk menampilkan semua data 
    public function menampilkan_saldo($id_user) {
        $this->db->select('saldo');
		$this->db->from($this->table);
		$this->db->where('id_user', $id_user);
		return $this->db->get()->row();
    }

    public function verifikasi_password($password){
    	$this->db->from($this->table);
    	$this->db->where('password', $password);
    	$this->db->where('id_user', $this->session->userdata('id_user'));
    	return $this->db->count_all_results();
    }

    public function update_saldo($id_user, $sisa){
	    	$update_user = array('saldo' => $sisa);
	        $this->db->where('id_user', $id_user);
	        $this->db->update('user', $update_user);
    }

    public function menampilkan_request(){
    	$this->db->select('*');
    	$this->db->from('tarik_dana');
    	$this->db->join('rekening', 'tarik_dana.id_rekening = rekening.id_rekening');
    	$this->db->join('user', 'rekening.id_user = user.id_user');
    	//$this->db->where('rekening.id_user', $this->session->userdata('id_user'));
		return $this->db->get()->result();

    }

    public function menampilkan_jumlah_tarik($id_tarikdana){
    	$this->db->join('rekening', 'tarik_dana.id_rekening = rekening.id_rekening');
    	$this->db->where('id_tarikdana', $id_tarikdana);
    	return $this->db->get($this->table1)->row();
    }

    public function update_status($id, $status){
    	$update_status = array('status' => $status);
	    $this->db->where('id_tarikdana', $id);
	    $this->db->update('tarik_dana', $update_status);
    }

}
?>