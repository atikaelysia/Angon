<?php
class Produk_Model extends CI_Model {
  
public function show_produk(){
	 	$user=$this->session->userdata('kategori_user');
        if ($user == 'Peternak'){
        	$sql="select * from produk, user u where produk.id_user = u.id_user and u.kategori_user='Industri Ternak' ORDER BY id_produk";
    	}else if($user == 'Pengguna Hasil Ternak'){
    		$sql="select * from produk, user u where produk.id_user = u.id_user and u.kategori_user='Peternak' ORDER BY id_produk";
    	}else{
    		$sql="select * from produk";
    	}
        return $this->db->query($sql)->result();
    }

public function find($id){					//dipake notif juga
 	$this->db->where ('id_produk', $id);
 	return $this->db->get('produk')->row();
}


function pencarian(){
    $cari = $this->input->get('cari');
   // echo "hahaha";
   // $this->db->from('produk');
    
    $this->db->like('nama_produk',$cari);
    $this->db->or_like('deskripsi',$cari);
    $this->db->or_like('kategori_produk',$cari);
    $this->db->or_like('nama_toko',$cari);
    $this->db->join('kategori_produk', 'produk.id_kategori_jenis = kategori_produk.id_kategori_produk');
    $this->db->join('user', 'produk.id_user = user.id_user');
    
  return $this->db->get('produk')->result();
    //die($this->db->last_query());
}

public function input_keluhan(){
        
}

}
?>