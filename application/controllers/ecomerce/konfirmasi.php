<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class konfirmasi extends MY_Controller {

public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('transaksi_model');
    
    
 }

 public function index(){
    	
      $this->load_page('ecomerce/pesanan_saya');
      
 }

 public function histori_pemesanan(){
 	$data['pesanan_pembeli'] = $this->transaksi_model->pesanan_pembeli();
	
	$this->load_page('ecomerce/histori_pesanan', $data);
  
 }

 public function konfirmasi_penerimaan(){
	   
     if($this->input->post('submit')){
      $id=$this->input->post("id");
      $this->transaksi_model->update_status_penerimaan($id);
      $this->transaksi_model->tambah_saldo($id);
      $this->session->set_flashdata('message', 'Terimakasih telah membeli di Angon');
      redirect('ecomerce/konfirmasi');
    }else{
      
      $this->load_page('ecomerce/konfirmasi_penerimaan');
      
    }
 }
 


 // function update_data($id) {
 //        	$status = $this->input->post('order_status');
 //            $this->transaksi_model->update($id, $status);
 //            redirect('manage/pesanan');
 // }

 //  public function detail_pesanan($id){
 //  //$this->load->view('header');
 //  //$this->load->view('sidebar');  
 //  $details = $this->transaksi_model->details($id);
  
 //  $this->load->vars('p', $details);
 //  $this->load->view('manage/detail_pesanan');
 // }

}
 ?>