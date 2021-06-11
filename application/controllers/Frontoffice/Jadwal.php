<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalModel');
        $this->load->library('form_validation');
        if (empty($this->session->userdata('email'))) {
            echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '" . base_url('Auth/login_user') . "';
            </script>"; //Url tujuan
        }
    }

    public function index()
    {
        $user = $this->session->userdata('id_user');
        $data['judul'] = 'Jadwal';
        $data['jadwal'] = $this->JadwalModel->v_jadwal();
        $data['data'] = $this->JadwalModel->absensi($user);
        $data['event'] = $this->JadwalModel->v_jadwal_event();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar2', $data);
        $this->load->view('frontoffice/page2/v_jadwal', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }
}
