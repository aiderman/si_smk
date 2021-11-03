<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->helper('url');
		$this->load->model('M_guru');
		$this->load->model('M_jadwal_pelajaran');
		$this->load->model('M_jadwal_siswa');
		$this->load->model('M_kegiatan');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function guru_home()
	{
		$id = "3";
		$data['nama'] = $this->M_guru->main_guru($id);

		// echo "<pre>";
		// echo print_r($data['nama']);
		// echo "<pre>";
		// die();

		$this->load->view('V_guru_profil', $data);
	}
	public function guru_jadwal()
	{
		$id = "3";
		$data['nama'] = $this->M_guru->main_guru($id);

		$data['jadwal'] = $this->M_jadwal_pelajaran->show_jadwal_pelajaran_per_guru($id);

		// echo "<pre>";
		// echo print_r($data['jadwal']);
		// echo print_r($data['nama']);
		// echo "<pre>";
		// die();

		$this->load->view('V_guru_jadwal', $data);
	}
	public function guru_nilai_siswa()
	{
		$id = "3";
		$data['nama'] = $this->M_guru->main_guru($id);
		$data['nilai_siswa'] = $this->M_jadwal_siswa->tampil_nilai_siswa();

		// echo "<pre>";
		// echo print_r($data['nilai_siswa']);
		// echo "<pre>";
		// die();

		$this->load->view('V_guru_nilai_siswa', $data);
	}


	public function informasi()
	{
		$this->load->view('V_informasi');
	}


	public function kontak()
	{
		$this->load->view('V_kontak');
	}



	public function sejarah()
	{
		$this->load->view('V_sejarah');
	}



	public function kegiatan()
	{
		$data['kegiatan'] = $this->M_kegiatan->semua_kegiatan();
		// echo "<pre>";
		// echo print_r($data['kegiatan']);
		// echo "<pre>";
		// die();
		$this->load->view('V_kegiatan', $data);
	}




	// 
}
