<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pesanan extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('transaksi_model');
 }

 public function index(){
 	$this->lihat_pesanan();
 }

 private function lihat_pesanan(){
 	$data['daftar_transaksi'] = $this->transaksi_model->showTransaksi();
  //$this->load->view('manage/header');
   //$this->load->view('manage/sidebar');
	$this->load->view('manage/lihat_pesanan', $data);

 }

 function update_data($id) {
    $status = $this->input->post('order_status');
    $this->transaksi_model->update($id, $status);
    redirect('manage/pesanan');
 }

  public function detail_pesanan($id = ''){
  //$this->load->view('header');
  //$this->load->view('sidebar');
  if ($id='') {
      $id=$this->uri->segment(4);
    }  
  $details = $this->transaksi_model->details($id);
  
  $this->load->vars('p', $details);
  $this->load->view('manage/detail_pesanan');
 }

 // public function detail_notifikasi($id_transaksi){                      //notif
 //  $this->load->model('notifikasi_model');
 //  $detail_notifikasi = $this->notifikasi_model->select_detail_notif($id_transaksi);
 //  $this->load->vars('daftar_transaksi', $detail_notifikasi);
 //  $this->load->view('manage/lihat_pesanan');
 // }

}
 ?>