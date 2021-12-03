<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_guru extends CI_Controller
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
			redirect('c_login/login_guru');
		}
	}


	public function login_guru()
	{
		$this->load->view('V_login_guru');
	}



	public function guru_home()
	{
		$data =  array(
			'title' 	=> 'Sistem Informasi Sekolah',
			'id' 		=> $this->session->userdata['logged_in']['session_id'],
			'nip' 		=> $this->session->userdata['logged_in']['session_nip']
		);
		// echo "<pre>";
		// echo print_r($data);
		// echo "<pre>";
		// die();
		$id = $data['nip'];

		$data['nama'] = $this->M_guru->main_guru($id);

		// echo "<pre>";
		// echo print_r($data['nama']);
		// echo "<pre>";
		// die();

		$this->load->view('V_guru_profil', $data);
	}

	public function guru_jadwal()
	{
		$data =  array(
			'title' 	=> 'Sistem Informasi Sekolah',
			'id' 		=> $this->session->userdata['logged_in']['session_id'],
			'nip' 		=> $this->session->userdata['logged_in']['session_nip']
		);
		// echo "<pre>";
		// echo print_r($data);
		// echo "<pre>";
		// die();
		$id = $data['nip'];
		$data['nama'] = $this->M_guru->main_guru($id);
		// $id = $data['id'];


		$data['jadwal'] = $this->M_jadwal_pelajaran->show_jadwal_pelajaran_per_guru($id);

		// echo "<pre>";
		// echo print_r($id);
		// echo "<pre>";
		// echo print_r($data['jadwal']);
		// echo "<pre>";
		// echo print_r($data['nama']);
		// echo "<pre>";
		// die();

		$this->load->view('V_guru_jadwal', $data);
	}
	public function guru_daftar_siswa()
	{
		$data =  array(
			'title' 	=> 'Sistem Informasi Sekolah',
			'id' 		=> $this->session->userdata['logged_in']['session_id'],
			'nip' 		=> $this->session->userdata['logged_in']['session_nip']
		);
		// echo "<pre>";
		// echo print_r($data);
		// echo "<pre>";
		// die();
		$id = $data['nip'];
		$data['nama'] = $this->M_guru->main_guru($id);
		$idp = $data['id'];
		$data['daftar_siswa'] = $this->M_jadwal_siswa->daftar_siswa_per_guru($idp);
		// echo "<pre>";
		// echo print_r($data['daftar_siswa']);
		// echo "<pre>";
		// die();

		$this->load->view('V_guru_daftar_siswa', $data);
	}
	public function guru_nilai_siswa()
	{
		$data =  array(
			'title' 	=> 'Sistem Informasi Sekolah',
			'id' 		=> $this->session->userdata['logged_in']['session_id'],
			'nip' 		=> $this->session->userdata['logged_in']['session_nip']
		);
		// echo "<pre>";
		// echo print_r($data);
		// echo "<pre>";
		// die();
		$id = $data['id'];
		$ids = $this->input->post('ids');

		$data['nama'] = $this->M_guru->main_guru($id);
		$data['nilai_siswa'] = $this->M_jadwal_siswa->siswa_per_guru($id, $ids);

		// echo "<pre>";
		// echo print_r($data);
		// echo "<pre>";
		// die();

		$this->load->view('V_guru_nilai_siswa', $data);
	}

	// 
}
