<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->helper('url');
		$this->load->model('M_teacher');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function teacher_home()
	{
		$id_guru = "3";
		$data['nama'] = $this->M_teacher->main_guru($id_guru);

		// echo "<pre>";
		// echo print_r($data['nama']);
		// echo "<pre>";
		// die();

		$this->load->view('V_teacher_home', $data);
	}
}
