<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->model('NotifModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Beranda';
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar', $data);
        $this->load->view('frontoffice/page/v_beranda', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }

    public function beranda_anggota()
    {
        $data['judul'] = 'Beranda';
        $data['notif'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->result_array();
        // $data['notif'] = $this->NotifModel->get_notif();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user', $data);
        $this->load->view('frontoffice/page2/v_beranda_anggota', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }

    public function beranda_umum()
    {
        $data['judul'] = 'Beranda';
        $data['notif'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->result_array();
        $data['notif2'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->result_array();
        // echo ($data['notif']);
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user', $data);
        $this->load->view('frontoffice/page2/v_beranda_umum', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }

    public function update_notif($id)
    {
        $update = $this->NotifModel;
        $update->update_status($id);
        redirect('Beranda/beranda_umum');
    }

    public function update_notif2($id)
    {
        $update = $this->NotifModel;
        $update->update_status($id);
        redirect('Beranda/beranda_anggota');
    }
}
