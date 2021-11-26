<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->helper('url');
		$this->load->model('M_guru');
		$this->load->model('M_siswa');
		$this->load->model('M_jadwal_pelajaran');
		$this->load->model('M_jadwal_siswa');
		$this->load->model('M_kegiatan');

		if (!($this->session->userdata('logged_in'))) {
			redirect('c_login');
		}
		// if ($this->session->userdata['logged_in']['session_nis'] == "1") {
		// 	redirect('c_login/logout');
		// }

		// $data =  array(
		// 	'title' 	=> 'Sistem Informasi Sekolah',
		// 	'id' 		=> $this->session->userdata['logged_in']['session_nis']
		// );
	}


	public function index()
	{
		$data['kegiatan'] = $this->M_kegiatan->per_kegiatan();
		$this->load->view('index', $data);
	}

	public function login_siswa()
	{
		$this->load->view('V_login_siswa');
	}



	public function siswa_home()
	{
		// $data = $this->session->userdata('session_nis');
		$data =  array(
			'title' 	=> 'Sistem Informasi Sekolah',
			'id' 		=> $this->session->userdata['logged_in']['session_nis']
		);
		// echo "<pre>";
		// echo print_r($data);
		// echo "<pre>";
		// die();
		$id = $data['id'];
		// echo print_r($id);
		// die();
		$data['nama'] = $this->M_siswa->main_siswa($id);
		$this->load->view('V_siswa_profil', $data);
	}

	public function siswa_jadwal()
	{

		$data =  array(
			'title' 	=> 'Sistem Informasi Sekolah',
			'id' 		=> $this->session->userdata['logged_in']['session_nis']
		);
		// echo "<pre>";
		// echo print_r($data);
		// echo "<pre>";
		// die();
		$id = $data['id'];
		$data['nama'] = $this->M_siswa->main_siswa($id);

		$data['jadwal'] = $this->M_jadwal_siswa->show_jadwal_pelajaran_per_siswa($id);

		// echo "<pre>";
		// echo print_r($data['jadwal']);
		// echo print_r($data['nama']);
		// echo "<pre>";
		// die();

		$this->load->view('V_siswa_jadwal', $data);
	}
	public function siswa_nilai_siswa()
	{
		$data =  array(
			'title' 	=> 'Sistem Informasi Sekolah',
			'id' 		=> $this->session->userdata['logged_in']['session_nis']
		);
		// echo "<pre>";
		// echo print_r($data);
		// echo "<pre>";
		// die();
		$id = $data['id'];
		$data['nama'] = $this->M_siswa->main_siswa($id);
		$data['nilai_siswa'] = $this->M_jadwal_siswa->tampil_nilai_per_siswa($id);

		// echo "<pre>";
		// echo print_r($data['nama']);
		// echo print_r($data['nilai_siswa']);
		// echo "<pre>";
		// die();

		$this->load->view('V_siswa_nilai_siswa', $data);
	}




	// 
}