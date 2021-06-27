<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->library('form_validation');
        $this->load->model('ProfileModel');
        $this->load->model('DashboardModel');
        if (empty($this->session->userdata('email'))) {
            echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '" . base_url('Auth/login_user') . "';
            </script>"; //Url tujuan
        }
    }

    public function index()
    {
        $id = $this->session->userdata('id_user');
        $data['judul'] = 'Profile';
        $data['notif'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->result();
        $data['profile'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ep'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jml_notif'] = $this->DashboardModel->jml_notif($id);
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbarr', $data);
        $this->load->view('frontoffice/page2/v_profile', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }

    public function update_profile()
    {
        $update = $this->ProfileModel;
        $update->update_profile();
        echo "<script>
        alert('Profile Anda Berhasil Diubah');
        window.location.href = '" . base_url('Frontoffice/Profile') . "';
    </script>";
    }
}
