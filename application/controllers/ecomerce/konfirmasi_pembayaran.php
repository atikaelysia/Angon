<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Konfirmasi_pembayaran extends My_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('konfirmasi_model');
    $this->load->model('rekening_model');
 }
 public function index(){
    $this->lihat_konfirmasi_pembayaran();
 }
 public function lihat_konfirmasi_pembayaran(){
    
    $rekening = $this->rekening_model->menampilkan_rekening();
    
    $this->load->vars('r', $rekening);
    $this->load_page('ecomerce/konfirmasi_pembayaran');
 }

 public function konfirm_pembayaran(){
        $id_transaksi = $this->input->post('id_transaksi');
        $selectbank = $this->input->post('selectbank');
        
        $id_rekening = '';

        if($this->input->post('selectbank') == 'tambah'){
            $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'nama_akun' => $this->input->post('nama_akun'),
            'no_rekening' => $this->input->post('no_rekening'),
            'nama_bank' => $this->input->post('nama_bank')
            );
            $this->rekening_model->insert_rekening($data);
            $id_rekening = $this->db->insert_id();;
        } else{
            $id_rekening = $this->input->post('selectbank');
        }

        $data = array(
            'id_transaksi' => $id_transaksi,
            'id_rekening' => $id_rekening
             );
            $this->konfirmasi_model->insert_pembayaran($data);

                $notif_request = array(                             //notif
                    'isi_pesan'     => 'ada 1 konfirmasi pembayaran',      
                    'waktu'         =>  date('Y-m-d'),                     
                    'link'          =>  'ecomerce/konfirmasi_pembayaran/menampilkan_pembayaran'
                        );                                              
                    $this->buat_notifikasi_admin($notif_request);

        redirect("ecomerce/konfirmasi_pembayaran");
 }

 public function menampilkan_pembayaran(){
     $bayar = $this->konfirmasi_model->select_pembayaran();
     $this->load->vars('b', $bayar);
     $this->load->view('manage/lihat_konfirmasibayar');

 }

 public function update_status() {
    $id = $this->uri->segment(4);
    $status = $this->input->post('req_status');
    $this->konfirmasi_model->update_status($id, $status);

    $result = $this->konfirmasi_model->select_detnotif_produk($id);
    foreach ($result as $r) {
        $notif_request = array(                                         //notif untuk penjual
                    'isi_pesan'     => 'ada 1 pembelian baru',      
                    'waktu'         =>  date('Y-m-d'),  
                    'kepada'        =>  $r->id_user,                   
                    'link'          =>  'ecomerce/konfirmasi_pembayaran/menampilkan_pembayaran'
                        );                                              
        $this->buat_notifikasi_penjual($notif_request);
    }
  
    redirect('ecomerce/konfirmasi_pembayaran/menampilkan_pembayaran');
 }


}