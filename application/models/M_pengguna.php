<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {

	public function __construct() {

		parent::__construct();

			$this->load->database();
	}

	public function get_pengguna($data) {

		$query = $this->db->get_where('tb_pengguna', $data);

			return $query;

	}

	public function check_pengguna() {

		$data = array(
				'username' => $this->input->post('username', TRUE),
				'password' => md5($this->input->post('password', TRUE)),
			);

		$hasil = $this->get_pengguna($data);
		if ( $hasil->num_rows() == 1 ) {

			foreach ($hasil->result() as $sess) {

				$data['id_pengguna'] 	= $sess->id_pengguna;
				$data['username'] 		= $sess->username;
				$data['hak_akses'] 		= $sess->hak_akses;
				$data['gambar']				= $sess->gambar;

				$this->session->set_userdata($data);

			}

			//menyimpan data jabatan
			$jabatan = [ 1 => "Admin", "Dosen", "Mahasiswa"];

			//get session hak_akses
			$data 	= $this->session->userdata('hak_akses');
			if ($data == "1" ) {

					$data = ['jabatan' => $jabatan[1], 'logged_in' => TRUE];
					$this->session->set_userdata($data);

					$alert	= "<script>alert('Login Sebagai $jabatan[1]')</script>";
					$this->session->set_flashdata("alert", $alert);
					redirect('dashboard');

			}
			if ($data == "2") {
				$dosen = $this->get_data_dosen();
				$data = [
					'jabatan' => $jabatan[2],
					'logged_in' => TRUE,
					'id_dosen' 	=> $dosen->id_dosen,
					'nama_dosen' => $dosen->nama_dosen,
				];
				$this->session->set_userdata($data);

				$alert	= "<script>alert('Login Sebagai $jabatan[2]')</script>";
				$this->session->set_flashdata("alert", $alert);
				redirect('dashboard');

			}
			if ($data == "3") {
				$mahasiswa = $this->get_data_mahasiswa();
				$data = [
					'jabatan' => $jabatan[3],
					'logged_in' => TRUE,
					'id_mahasiswa' => $mahasiswa->id_mahasiswa,
					'nama_mahasiswa' => $mahasiswa->nama_mahasiswa,
				];
				$this->session->set_userdata($data);

				$alert	= "<script>alert('Login Sebagai $jabatan[3]')</script>";
				$this->session->set_flashdata("alert", $alert);
				redirect('dashboard');
			}

		} else {
			$alert	= "<script>alert('Maaf! Username dan Password anda Salah')</script>";
			$this->session->set_flashdata("alert", $alert);
			redirect('login');
		}

	}

	public function check_session() {
		$data = $this->session->userdata('logged_in');

		if ($data == FALSE) {
			$alert	= "<script>alert('Anda belum melakukan login')</script>";
			$this->session->set_flashdata("alert", $alert);
			redirect('login');
		}

	}
	//for session
	public function get_data_dosen()
	{
		$id = $this->session->userdata('id_pengguna');
		$this->db->select('*');
		$this->db->from('tb_dosen AS do');
		$this->db->join('tb_pengguna AS pn', 'do.`id_pengguna` = pn.`id_pengguna`', 'LEFT');
		$this->db->where('do.`id_pengguna` = "'.$id.'"'   );
		$query = $this->db->get();
			return $query->row();
	}

	public function get_data_mahasiswa()
	{
		$id = $this->session->userdata('id_pengguna');
		$this->db->select('*');
		$this->db->from('tb_mahasiswa AS mh');
		$this->db->join('tb_pengguna AS pn', 'mh.`id_pengguna` = pn.`id_pengguna`', 'LEFT');
		$this->db->where('mh.`id_pengguna` = "'.$id.'"'   );
		$query = $this->db->get();
			return $query->row();
	}

	//kelola pengguna
	public function tambah_data_pengguna($data)
	{
		$this->db->insert('tb_pengguna', $data);

			return $this->db->insert_id(); //return lastid
	}

	//Kelola Pengguna (Dosen)

	public function tampil_data_dosen()
	{
		$query = $this->db->get('tb_dosen');
		return $query->result();
	}

	public function tambah_data_dosen($data)
	{
		$this->db->insert('tb_dosen', $data);
	}

	//Kelola Pengguna (Mahasiswa)
	public function tambah_data_mahasiswa($data)
	{
		$this->db->insert('tb_mahasiswa', $data);
	}

	public function tampil_data_mahasiswa()
	{
		$query = $this->db->get('tb_mahasiswa');
		return $query->result();
	}


}
