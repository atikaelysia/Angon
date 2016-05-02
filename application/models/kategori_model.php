<?php

class kategori_model extends CI_Model {


function kategori(){
        //$user=$this->session->userdata('kategori_user');
        // if ($user == 'Peternak'){
        //     $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'I%'");
        // }else if($user == 'Pengguna Hasil Ternak'){
        //     $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'P%'");
        // }else{
        //     $query = $this->db->query("select * from kategori_produk where id_kategori_produk like 'I%'");
        // }
        $this->db->like('id_kategori_produk','I');
        $query = $this->db->get('kategori_produk');
        return $query->result();
 }
 function drop(){
        $this->db->like('id_kategori_produk','P');
        $query = $this->db->get('kategori_produk');
        return $query->result();
}


 public function cari_kategori($kat){
 	$this->db->where('id_kategori_jenis',$kat);
    return $this->db->get('produk')->result();
}


 function drop_kategori(){
        $this->db->select('*');
        $this->db->from('kategori_produk');
        $query = $this->db->get();
        return $query->result();
    }
}
?>