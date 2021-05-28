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
    }

    public function index()
    {
        $data['judul'] = 'Profile';
        $data['profile'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(); 
        $data['ep'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user2', $data);
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