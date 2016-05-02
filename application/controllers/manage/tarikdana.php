<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tarikdana extends My_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('dana');
    $this->load->model('rekening_model');
 }

 public function lihat_dana(){
    $dana = $this->dana->menampilkan_saldo($this->session->userdata('id_user'));
    $rekening = $this->rekening_model->menampilkan_rekening();
    $this->load->vars('d', $dana);
    $this->load->vars('r', $rekening);
    $this->load->view('manage/form_tarikdana');
 }

 public function tarik_dana(){
        $jumlahpenarikan = $this->input->post('jumlah-penarikan');
        $selectbank = $this->input->post('select-bank');
        $katasandi = $this->input->post('kata-sandi');
        $id_rekening = '';

        if($this->input->post('selectbank') == 'tambah'){
            $data = array(
            'nama_akun' => $this->input->post('nama-akun'),
            'id_user' => $this->session->userdata('id_user'),
            'no_rekening' => $this->input->post('nomor-rekening'),
            'nama_bank' => $this->input->post('nama-bank')
            );
            $this->rekening_model->insert_rekening($data);
            $id_rekening = $this->db->insert_id();;
        } else{
            $id_rekening = $this->input->post('selectbank');
        }

        
        if ($this->dana->verifikasi_password($katasandi) > 0) {     // jika password benar
            $saldo = $this->dana->menampilkan_saldo($this->session->userdata('id_user'))->saldo;
            $sisa = $saldo - $jumlahpenarikan;
            if($sisa >= 0){                             // jika uang yg diambil benar (mencukupi)

                $data = array(
                    'jumlah_tarikdana' => $jumlahpenarikan,
                    'id_rekening' => $id_rekening
                    );
                $this->dana->insert_tarikdana($data);

                $notif_request = array(                                         //notif
                        'isi_pesan'     => 'ada 1 request tarik dana baru',      
                        'waktu'         => date('Y-m-d'),                             
                        'link'          =>  'manage/tarikdana/menampilkan_request'
                        );                                                      
                    $this->buat_notifikasi_admin($notif_request);

            } else {
                $this->session->set_flashdata('error', 'masukkan nilai yang sesuai');
            }
        } else {
            $this->session->set_flashdata('error', 'password salah');
        }

        redirect("manage/tarikdana/lihat_dana");
        
 }

 public function menampilkan_request(){
     $reqdana = $this->dana->menampilkan_request();
     $this->load->vars('d', $reqdana);
     $this->load->view('manage/lihat_tarikdana');

 }

 public function update_status($id_tarikdana) {
    $status = $this->input->post('req_status');
    $this->dana->update_status($id_tarikdana, $status);

    if($status == 'Selesai') {
        $tarikdana = $this->dana->menampilkan_jumlah_tarik($id_tarikdana);
        $saldo = $this->dana->menampilkan_saldo($tarikdana->id_user)->saldo;
        $sisa = $saldo - $tarikdana->jumlah_tarikdana;
        $this->dana->update_saldo($tarikdana->id_user, $sisa);
    }
    redirect('manage/tarikdana/menampilkan_request');
 }


}