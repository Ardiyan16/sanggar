<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Tentang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->model('DashboardModel');
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
        $data['judul'] = 'Tentang';
        $data['notif'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->result();
        $data['site'] = $this->db->get_where('tbl_site')->result();
        $data['jml_pelatih'] = $this->db->count_all('tbl_trainer');
        $data['jml_anggota'] = $this->DashboardModel->countUser();
        $data['pelatih'] = $this->DashboardModel->pelatih();
        $data['anggota'] = $this->DashboardModel->anggota();
        $data['anggota2'] = $this->DashboardModel->anggota2();
        $data['penghargaan'] = $this->DashboardModel->prestasi();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbarr', $data);
        $this->load->view('frontoffice/page2/v_tentang_sanggar', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }
}
