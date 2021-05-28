<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Tentang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Tentang';
        $this->load->view('frontoffice/style/v_header');
        $this->load->view('frontoffice/style/v_navbar_user2', $data);
        $this->load->view('frontoffice/page2/v_tentang_sanggar', $data);
        $this->load->view('frontoffice/style/v_footer');
    }
}