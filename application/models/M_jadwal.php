<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

  public function __construct()
  {
    parent::__construct();

    $this->load->database();
  }

  //kelola Matakuliah
  public function lihat_data_mk() {
    $this->db->select('*');
    $this->db->from('tb_matakuliah AS m');
    $this->db->join('tb_semester AS s', 'm.`id_semester` = s.`id_semester`');
    $query = $this->db->get();
    return $query->result();
  }

  public function tambah_data_mk($data)
  {
    $this->db->insert('tb_matakuliah', $data);
  }

  public function lihat_data_by($id)
  {
    $this->db->where('id_matakuliah', $id);
    $query = $this->db->get('tb_matakuliah');

    return $query->row();
  }

  public function edit_data_mk($data, $id)
  {
    $this->db->where('id_matakuliah', $id);
    $this->db->update('tb_matakuliah', $data);
  }

  public function hapus_data_mk($id)
  {
    $this->db->where('id_matakuliah', $id);
    $this->db->delete('tb_matakuliah');
  }

  public function lihat_data_matkul() {
    $query = $this->db->get('tb_matakuliah');
    return $query->result();
  }

  public function lihat_data_pertemuan() {
    $query = $this->db->get('tb_pertemuan');
    return $query->result();
  }

  public function lihat_data_semester() {
    $query = $this->db->get('tb_semester');
    return $query->result();
  }

  public function lihat_data_hari() {
    $query = $this->db->get('tb_hari');
    return $query->result();
  }

  //Kelola jadwal
  public function tambah_data_jadwal($data)
  {
    $this->db->insert('tb_jadwal', $data);
  }

  public function lihat_data_jadwal()
  {
    $this->db->select('*');
    $this->db->from('tb_jadwal');
    $this->db->join('tb_hari', 'tb_jadwal.id_hari = tb_hari.id_hari', 'left');
    $this->db->join('tb_matakuliah', 'tb_jadwal.id_matakuliah = tb_matakuliah.id_matakuliah', 'left');
    $this->db->join('tb_dosen', 'tb_jadwal.id_jadwal = tb_dosen.id_dosen', 'left');
    $query = $this->db->get();
    return $query->result();
  }

  public function lihat_jadwal_by($id)
  {
    $this->db->where('id_jadwal', $id);
    $query = $this->db->get('tb_jadwal');

    return $query->row();
  }

  public function edit_data_jadwal($data, $id)
  {
    $this->db->where('id_jadwal', $id);
    $this->db->update('tb_jadwal', $data);
  }

  public function hapus_data_jadwal($id)
  {
    $this->db->where('id_jadwal', $id);
    $this->db->delete('tb_jadwal');
  }

  public function tampil_data_jadwal_dosen($id)
  {
    $this->db->select('*');
    $this->db->from('tb_jadwal');
    $this->db->join('tb_hari', 'tb_jadwal.id_hari = tb_hari.id_hari', 'left');
    $this->db->join('tb_matakuliah', 'tb_jadwal.id_matakuliah = tb_matakuliah.id_matakuliah', 'left');
    $this->db->join('tb_dosen', 'tb_jadwal.id_jadwal = tb_dosen.id_dosen', 'left');
    $this->db->where('tb_dosen.id_dosen = "'.$id.'"');
    $query = $this->db->get();
    return $query->result();
  }

  public function tampil_data_jadwal_mhs($id_hari){
    $this->db->select('*');
    $this->db->from('tb_jadwal');
    $this->db->join('tb_hari', 'tb_jadwal.id_hari = tb_hari.id_hari', 'left');
    $this->db->join('tb_matakuliah', 'tb_jadwal.id_matakuliah = tb_matakuliah.id_matakuliah', 'left');
    $this->db->join('tb_dosen', 'tb_jadwal.id_jadwal = tb_dosen.id_dosen', 'left');
    $this->db->where('tb_hari.id_hari = "'.$id_hari.'"');
    $query = $this->db->get();
    return $query->result();
  }

}
