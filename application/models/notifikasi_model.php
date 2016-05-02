<?php
	class Notifikasi_model extends CI_Model {
	var $table1 = 'notifikasi_admin';
	var $table2 = 'notifikasi_penjual';
	var $details;

	public function select_notif_admin(){
		$this->db->where('sudahbaca', 'N');
		return $this->db->get($this->table1)->result();
		//$sql = "SELECT * FROM $table INNER JOIN produk USING(id_produk) WHERE produk.id_user='$this->session->userdata('id_user')' and sudahbaca='N'";
		//return $this->db->query($sql)->result(); 
	}

	public function select_notif_penjual(){
		$this->db->where('kepada', $this->session->userdata('id_user'));
		$this->db->where('sudahbaca', 'N');
		return $this->db->get($this->table2)->result();
	}

	public function select_detail_notif($id_transaksi){ 			//tambahi
		
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('transaksi', 'user.id_user = transaksi.id_user');
		$this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
		$this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk');
		$this->db->where('transaksi.id_transaksi', $id_transaksi);
		return $this->db->get()->result();
	}

	public function hitung_notif_admin(){
		// $this->db->where('kepada', $this->session->userdata('id_user'));
		$this->db->where('sudahbaca', 'N');
		$this->db->FROM($this->table1);
		return $this->db->count_all_results();
	}

	public function hitung_notif_penjual(){
		$this->db->where('kepada', $this->session->userdata('id_user'));
		$this->db->where('sudahbaca', 'N');
		$this->db->FROM($this->table2);
		return $this->db->count_all_results();
	}


	public function insert_notif_admin($notif){			//notif
		$this->db->insert($this->table1, $notif); 
	}

	public function insert_notif_penjual($notif){			
		$this->db->insert($this->table2, $notif); 
	}

}
?>