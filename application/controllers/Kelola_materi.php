<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_materi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //load model and add alias
    //check session logged_in
      $this->load->model(array('m_pengguna', 'm_materi', 'm_jadwal'));
      $this->m_pengguna->check_session();
  }

  public function tambah_materi()
  {
    $data['panel_title'] = 'Tambah Materi Kuliah';
    $data['matkul'] = $this->m_jadwal->lihat_data_mk();
    $data['pertemuan'] = $this->m_jadwal->lihat_data_pertemuan();
    $data['dosen'] = $this->m_pengguna->tampil_data_dosen();
    $data['konten'] = 'materikuliah/v_tambah_materi';
    $data['error'] = '';
    $data['notif'] = '';
    $this->load->view('template_admin', $data);
  }

  public function tambah_materi_proses()
  {
       $config['upload_path']          = './assets/images/uploads/';
       $config['allowed_types']        = 'pptx|ppt|pdf';
       $config['max_size']             = 10000;

       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('file'))
       {
         $data['panel_title'] = 'Tambah Materi Kuliah';
         $data['konten'] = 'materikuliah/v_tambah_materi';
         $data['error'] = $this->upload->display_errors();
         $data['notif'] = 'alert';
         $this->load->view('template_admin', $data);
       }
       else
       {
         $id_dosen = $this->session->userdata('id_dosen');
         $data = array(
           'id_matakuliah'  =>  $this->input->post('id_matakuliah'),
           'id_dosen'       =>  $id_dosen,
           'dokumen'        =>  $this->upload->data('file_name'),
           'id_pertemuan'   =>  $this->input->post('id_pertemuan'),
           'tanggal'        =>  $this->jamsekarang(),
         );

         $this->m_materi->tambah_data_materi($data);

         $alert = "<script>alert('Data berhasil disimpan')</script>";
         $this->session->set_flashdata("alert", $alert);
         redirect('Kelola_materi/tampil_materi_dosen');
       }
  }

  public function tampil_materi_dosen()
  {
    $data['panel_title'] = 'Tampil Materi Kuliah';
    $data['db'] = $this->m_materi->tampil_data_dosen();
    $data['konten'] = 'materikuliah/v_tampil_materi';
    $this->load->view('template_admin', $data);
  }

  public function tampil_materi_mhs()
  {
    $data['panel_title'] = 'Tampil Materi Kuliah';
    $data['db'] = $this->m_materi->tampil_data_materi();
    $data['konten'] = 'materikuliah/v_tampil_materi_mhs';
    $this->load->view('template_admin', $data);
  }

  //untuk admin
  public function tampil_materi_admin()
  {
    $data['panel_title'] = 'Tampil Materi Kuliah';
    $data['db'] = $this->m_materi->tampil_data_materi();
    $data['konten'] = 'materikuliah/v_tampil_materi_admin';
    $this->load->view('template_admin', $data);
  }

  public function tambah_materi_admin()
  {
    $data['panel_title'] = 'Tambah Materi Kuliah';
    $data['matkul'] = $this->m_jadwal->lihat_data_mk();
    $data['pertemuan'] = $this->m_jadwal->lihat_data_pertemuan();
    $data['dosen'] = $this->m_pengguna->tampil_data_dosen();
    $data['konten'] = 'materikuliah/v_tambah_materi_admin';
    $data['error'] = '';
    $data['notif'] = '';
    $this->load->view('template_admin', $data);
  }

  public function tambah_materi_admin_proses()
  {
       $config['upload_path']          = './assets/images/uploads/';
       $config['allowed_types']        = 'pptx|ppt|pdf';
       $config['max_size']             = 10000;

       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('file'))
       {
         $data['panel_title'] = 'Tambah Materi Kuliah';
         $data['konten'] = 'materikuliah/v_tambah_materi_admin';
         $data['error'] = $this->upload->display_errors();
         $data['notif'] = 'alert';
         $this->load->view('template_admin', $data);
       }
       else
       {
         //$id_dosen = $this->session->userdata('id_dosen');
         $data = array(
           'id_matakuliah'  =>  $this->input->post('id_matakuliah'),
           'id_dosen'       =>  $this->input->post('id_dosen'),
           'dokumen'        =>  $this->upload->data('file_name'),
           'id_pertemuan'   =>  $this->input->post('id_pertemuan'),
           'tanggal'        =>  $this->jamsekarang(),
         );

         $this->m_materi->tambah_data_materi($data);

         $alert = "<script>alert('Data berhasil disimpan')</script>";
         $this->session->set_flashdata("alert", $alert);
         redirect('Kelola_materi/tampil_materi_admin');
       }
  }



  public function jamsekarang() {

  date_default_timezone_set('Asia/Jakarta');

    return date ("Y-m-d");
    // H:i:s

  }

}
