<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Profile';
        $data['profile'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(); 
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user2', $data);
		$this->load->view('frontoffice/page2/v_profile', $data);
		$this->load->view('frontoffice/style/v_footer', $data);
    }
}