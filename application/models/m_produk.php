<?php

class m_produk extends CI_Model {

    public $id_produk;
    public $id_kategori_jenis;
    public $nama_produk;
    public $harga_produk;
    public $berat;
    public $stok;
    public $deskripsi;
    public $id_user;
    public $gbr_produk;
    public $userfile;
    public $id_kategori_produk;
    public $kategori_produk;

    //fungsi untuk menampilkan semua data karyawan
    function index() {
        
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori_produk','produk.id_kategori_jenis = kategori_produk.id_kategori_produk');
        $this->db->where('id_user',$id_user);
        $query = $this->db->get();
        return $query->result();
    }

    
    

    //fungsi untuk menambah data karyawan
    function insert($url) {
        $insert_produk = array(
            'id_produk' => $this->input->post('id_produk'),
            'id_kategori_jenis' => $this->input->post('id_kategori_produk'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'berat' => $this->input->post('berat'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'id_user' => $this->input->post('id_user'),
        );
        $this->db->set('gbr_produk',$url);
        $insert = $this->db->insert('produk', $insert_produk);
        return $insert;
    }

    //fungsi untuk menampilkan data yang akan diedit
    function edit($id) {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori_produk','produk.id_kategori_jenis = kategori_produk.id_kategori_produk');
        $this->db->where('id_produk',$id);
        $query = $this->db->get();
        return $query;
    }

    //fungsi yang digunakan untuk query update
    function prosesedit() {
        $update_produk = array(
            'id_produk' => $this->input->post('id_produk'),
            'id_kategori_jenis' => $this->input->post('id_kategori_produk'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'berat' => $this->input->post('berat'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'id_user' => $this->input->post('id_user'),
        );
        $id = $this->input->post('id_produk');
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $update_produk);    }

        function editgbr($url){
            $update_produk = array(
            'id_produk' => $this->input->post('id_produk'),
            'id_kategori_jenis' => $this->input->post('id_kategori_produk'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'berat' => $this->input->post('berat'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'id_user' => $this->input->post('id_user'),
        );
            $this->db->set('gbr_produk',$url);
        $id = $this->input->post('id_produk');
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $update_produk);
        }

    //fungsi yang digunakan untuk query delete
    function delete($id) {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }


   
}
?>
