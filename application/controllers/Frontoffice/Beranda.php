<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->model('NotifModel');
        $this->load->model('DashboardModel');
        $this->load->library('form_validation');
        if (empty($this->session->userdata('email'))) {
            echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '" . base_url('Auth/login_user') . "';
            </script>"; //Url tujuan
        }
    }

    public function beranda_anggota()
    {
        $id = $this->session->userdata('id_user');
        $data['judul'] = 'Beranda';
        //$data['notif'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->result_array();
        $data['jml_notif'] = $this->DashboardModel->jml_notif($id);
        $data['notif'] = $this->NotifModel->get_notif();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user', $data);
        $this->load->view('frontoffice/page2/v_beranda_anggota', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }

    public function beranda_umum()
    {
        $id = $this->session->userdata('id_user');
        $data['judul'] = 'Beranda';
        $data['notif'] = $this->NotifModel->get_notif();
        $data['notif'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->result_array();
        $data['notif2'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->result_array();
        $data['jml_notif'] = $this->DashboardModel->jml_notif($id);
        // echo ($data['notif']);
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user', $data);
        $this->load->view('frontoffice/page2/v_beranda_umum', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }
}
