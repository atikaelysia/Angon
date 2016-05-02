<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Return_dana extends My_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('returndana_model');
 }

 public function index(){
    $this->load->view('ecomerce/header');
    $this->load->view('manage/form_returndana');
    $this->load->view('ecomerce/footer');
 }

 public function insert(){
    $this->returndana_model->insert();

    $notif_request = array(                                         //notif
            'isi_pesan'     => 'ada 1 request return dana baru',      
            'waktu'         => date('Y-m-d'),                              
            'link'          => 'manage/return_dana'
            );                                                      
        $this->buat_notifikasi_admin($notif_request);

    redirect ('manage/return_dana');
 }

 public function select_returndana(){
    $reqreturn = $this->returndana_model->select();
    $this->load->vars('d', $reqreturn);
    $this->load->view('manage/lihat_returndana');
 }

 public function update_status($id) {
    $status = $this->input->post('req_status');
    $this->returndana_model->update_status($id, $status);
    redirect('manage/return_dana/select_returndana');
 }

    
}