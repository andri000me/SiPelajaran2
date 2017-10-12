<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_jadwal extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
      $this->load->helper(array('url'));
      $this->load->model(array('m_pengguna', 'm_jadwal', ));
			$this->m_pengguna->check_session();

  }

  public function tampil_mk()
  {
    $data['panel_title'] = 'Tampil Mata Kuliah';
    $data['db'] = $this->m_jadwal->lihat_data_mk();
    $data['konten'] = 'jadwal/v_tampil_mk';
    $this->load->view('template_admin', $data);
  }

  public function tambah_mk()
  {
    $data['panel_title'] = 'Tambah Mata Kuliah';
    $data['semester'] = $this->m_jadwal->lihat_data_semester();
    $data['konten'] = 'jadwal/v_tambah_mk';
    $this->load->view('template_admin', $data);
  }

  public function tambah_mk_proses()
  {
    $data = array(
      'matakuliah'  => $this->input->post('matakuliah'),
      'sks'         => $this->input->post('sks'),
      'id_semester' => $this->input->post('id_semester'),
    );
    $this->m_jadwal->tambah_data_mk($data);
		$alert	= "<script>alert('Data berhasil disimpan')</script>";
		$this->session->set_flashdata("alert", $alert);
		redirect('kelola_jadwal/tampil_mk');
  }

  public function edit_mk($id)
  {
    $data['panel_title'] = 'Tambah Mata Kuliah';
    $data['db'] = $this->m_jadwal->lihat_data_by($id);
    $data['konten'] = 'jadwal/v_edit_mk';
    $this->load->view('template_admin', $data);
  }

  public function edit_mk_proses($id)
  {
    $id = $this->uri->segment('3');

    $data = array(
      'matakuliah'  => $this->input->post('matakuliah'),
      'sks'         => $this->input->post('sks'),
      'id_semester' => $this->input->post('id_semester'),
    );

    $this->m_jadwal->edit_data_mk($data, $id);
    $alert	= "<script>alert('Data berhasil diedit')</script>";
    $this->session->set_flashdata("alert", $alert);
    redirect('kelola_jadwal/tampil_mk');
  }

  public function hapus_mk($id)
  {
    $id = $this->uri->segment('3');
    $this->m_jadwal->hapus_data_mk($id);
    $alert	= "<script>alert('Data berhasil dihapus')</script>";
    $this->session->set_flashdata("alert", $alert);
    redirect('kelola_jadwal/tampil_mk');
  }

  public function tampil_jadwal()
  {
    $data['panel_title'] = 'Tampil Jadwal';
    $data['db'] = $this->m_jadwal->lihat_data_jadwal();
    $data['konten'] = 'jadwal/v_tampil_jadwal';
    $this->load->view('template_admin', $data);
  }

  public function tambah_jadwal()
  {
    $data['panel_title'] = 'Tambah Jadwal';
    $data['matkul'] = $this->m_jadwal->lihat_data_matkul();
    $data['dosen'] = $this->m_pengguna->tampil_data_dosen();
    $data['hari'] = $this->m_jadwal->lihat_data_hari();
    $data['konten'] = 'jadwal/v_tambah_jadwal';
    $this->load->view('template_admin', $data);
  }

  public function tambah_jadwal_proses()
  {
    $data = array(
      'jam'             => $this->input->post('jam'),
      'id_hari'         => $this->input->post('id_hari'),
      'id_matakuliah'   => $this->input->post('id_matakuliah'),
      'id_dosen'        => $this->input->post('id_dosen'),
    );
    $this->m_jadwal->tambah_data_jadwal($data);
    $alert	= "<script>alert('Data berhasil disimpan')</script>";
    $this->session->set_flashdata("alert", $alert);
    redirect('kelola_jadwal/tampil_jadwal');
  }

  public function edit_jadwal($id)
  {
    $data['panel_title'] = 'Edit Mata Kuliah';
    $data['db'] = $this->m_jadwal->lihat_jadwal_by($id);
    $data['matkul'] = $this->m_jadwal->lihat_data_matkul();
    $data['dosen'] = $this->m_pengguna->tampil_data_dosen();
    $data['hari'] = $this->m_jadwal->lihat_data_hari();
    $data['konten'] = 'jadwal/v_edit_jadwal';
    $this->load->view('template_admin', $data);
  }

  public function edit_jadwal_proses($id)
  {
    $id = $this->uri->segment('3');

    $data = array(
      'jam'             => $this->input->post('jam'),
      'id_hari'         => $this->input->post('id_hari'),
      'id_matakuliah'   => $this->input->post('id_matakuliah'),
      'id_dosen'        => $this->input->post('id_dosen'),
    );

    $this->m_jadwal->edit_data_jadwal($data, $id);
    $alert	= "<script>alert('Data berhasil diedit')</script>";
    $this->session->set_flashdata("alert", $alert);
    redirect('kelola_jadwal/tampil_jadwal');
  }

  public function hapus_jadwal($id)
  {
    $id = $this->uri->segment('3');
    $this->m_jadwal->hapus_data_jadwal($id);
    $alert	= "<script>alert('Data berhasil dihapus')</script>";
    $this->session->set_flashdata("alert", $alert);
    redirect('kelola_jadwal/tampil_jadwal');
  }

  public function tampil_jadwal_dosen()
  {
    $id = $this->session->userdata('id_dosen');
    $data['db'] = $this->m_jadwal->tampil_data_jadwal_dosen($id);
    $data['konten'] = 'jadwal/v_tampil_jadwal_dosen';
    $this->load->view('template_admin', $data);
  }

  public function tampil_jadwal_mhs()
  {

    $data['hari'] = $this->m_jadwal->lihat_data_hari();

    $id_hari = $this->input->post('id_hari');
    if ($id_hari  == NULL ) {
        $data['db'] = $this->m_jadwal->tampil_data_jadwal_mhs($id_hari);
    } else {
      $data['db'] = $this->m_jadwal->tampil_data_jadwal_mhs($id_hari);
    }

    //$data['db'] = $this->m_jadwal->tampil_data_jadwal_mhs($id_hari);
    $data['konten'] = 'jadwal/v_tampil_jadwal_mhs';
    $this->load->view('template_admin', $data);
  }

  public function jamsekarang() {

    date_default_timezone_set('Asia/Jakarta');

      return date ("D");
  }

}
