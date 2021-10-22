<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_master extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	// $this->load->helper('url');
	// }
	public function index()
	{
		$this->load->view('index');
	}
	public function teacher_home()
	{
		$this->load->view('teacher_home1');
	}
}
