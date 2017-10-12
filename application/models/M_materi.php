<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_materi extends CI_Model {

  public function __construct()
  {
    parent::__construct();

      $this->load->database();
  }

  public function tambah_data_materi($data)
  {
    $this->db->insert('tb_materi_kuliah', $data);
  }

  public function tampil_data_dosen()
  {
    $id = $this->session->userdata('id_dosen');
    $this->db->select('*');
    $this->db->from('tb_materi_kuliah AS mk');
    $this->db->join('tb_matakuliah AS mat', 'mk.`id_matakuliah` = mat.`id_matakuliah`', 'LEFT' );
    $this->db->join('tb_pertemuan AS prt', 'mk.`id_pertemuan` = prt.`id_pertemuan`', 'LEFT' );
    $this->db->join('tb_dosen AS do', 'mk.`id_dosen` = do.`id_dosen`', 'LEFT');
    $this->db->where('do.`id_dosen` = "'.$id.'"');
    $query = $this->db->get();
        return $query->result();
  }


  public function tampil_data_materi()
  {

    $this->db->select('*');
    $this->db->from('tb_materi_kuliah AS mk');
    $this->db->join('tb_matakuliah AS mat', 'mk.`id_matakuliah` = mat.`id_matakuliah`', 'LEFT' );
    $this->db->join('tb_pertemuan AS prt', 'mk.`id_pertemuan` = prt.`id_pertemuan`', 'LEFT' );
    $this->db->join('tb_dosen AS do', 'mk.`id_dosen` = do.`id_dosen`', 'LEFT');
    //$this->db->where('do.`id_dosen` = "'.$id.'"');
    $query = $this->db->get();
        return $query->result();
  }
}
