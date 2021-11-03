<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_jadwal_pelajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->helper('url');

        $this->load->model('M_jadwal_pelajaran');
    }

    function show_jadwal_pelajaran()
    {
        $data['jp'] = $this->M_jadwal_pelajaran->show_jadwal_pelajaran();

        echo "<pre>";
        echo print_r($data['jp']);
        echo "<pre>";
        die();

        $this->load->view('V_teacher_jadwal', $data);
    }
}
