<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Jadwal';
        $data['jadwal'] = $this->JadwalModel->v_jadwal();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar2', $data);
        $this->load->view('frontoffice/page2/v_penyewaan', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }
}