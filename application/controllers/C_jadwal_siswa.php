<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_jadwal_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->helper('url');
        $this->load->model('M_jadwal_siswa');
    }

    public function jadwal_siswa()
    {
        $data['siswa'] = $this->M_jadwal_siswa->show_nilai_siswa();

        // echo "<pre>";
        // echo print_r($data['siswa']);
        // echo "<pre>";
        // die();

        $this->load->view('V_jadwal_siswa', $data);
    }
}
