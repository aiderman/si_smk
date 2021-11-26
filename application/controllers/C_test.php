<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		// $this->load->model('m_login');
		$this->load->helper('url');
		$this->load->model('M_guru');
		$this->load->model('M_siswa');
	}
	public function index()
	{
		$this->load->view('V_login_siswa');
	}


	public function cek_login()
	{

		$data['user']		= $this->input->post('username');
		$data['pass']	= $this->input->post('password');

		//cek data ke database
		$hasil = $this->M_siswa->siswa_login($data);
		// echo "<pre>";
		// echo print_r($hasil);
		// echo "</pre>";
		// (die);


		if ($hasil == TRUE) {

			$session_data = array(
				'session_user' 		=> $hasil[0]->nama_siswa,
				'session_nis' 			=> $hasil[0]->nis_siswa,
				'session_level' 			=> 'siswa',
			);

			// echo "<pre>";
			// echo print_r($session_data);
			// echo "</pre>";
			// (die);

			$this->session->set_userdata('logged_in', $session_data);
			// admin
			if ($hasil[0]->nis_siswa == 'siswa') {
				echo "<pre>";
				echo print_r($hasil);
				echo "</pre>";
				(die);
				$this->session->set_flashdata("welcome", "info");
				redirect('');
			}
		} else {
?>
			<script type='text/javascript'>
				alert('Nama Akun & Kata Sandi Anda Salah!');
				// history.back('login/index');
			</script>
<?php
			$this->session->set_flashdata('fail2', "Gagal");
			redirect('index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}


	// 
}
