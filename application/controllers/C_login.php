<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
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
	}

	public function login_siswa()
	{
		$this->load->view('V_login_siswa');
	}


	public function siswa_cek()
	{
		$id = $this->input->post('nis');

		$data = $this->M_siswa->cek_siswa($id);
		// echo "<pre>";
		// echo print_r($data);
		// echo "</pre>";
		// (die);

		if ($data == TRUE) {
			$session_data = array(
				'session_nis' 		=> $data[0]->nis_siswa,
				'session_id' 		=> $data[0]->id_siswa,

			);
			// echo "<pre>";
			// echo print_r($session_data);
			// echo "</pre>";
			// (die);


			$this->session->set_userdata('logged_in', $session_data);

			redirect('c_siswa/siswa_home');
		} else {
?>
			<script type='text/javascript'>
				alert('Nama Akun & Kata Sandi Anda Salah!');
				// history.back('login/index');
			</script>
<?php
			$this->session->set_flashdata('fail2', "Gagal");
			redirect('c_siswa/login_siswa');
		}
	}




	// 
}
