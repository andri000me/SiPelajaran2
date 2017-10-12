<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_matakuliah extends CI_Model {

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

  public function lihat_data_semester() {
    $query = $this->db->get('tb_semester');
    return $query->result();
  }

  public function lihat_data_matkul() {
    $query = $this->db->get('tb_matakuliah');
    return $query->result();
  }


}
