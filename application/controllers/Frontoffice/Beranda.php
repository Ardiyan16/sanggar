<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
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

    public function beranda()
    {
        $data['judul'] = 'Beranda';
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user', $data);
		$this->load->view('frontoffice/page/v_beranda_umum', $data);
		$this->load->view('frontoffice/style/v_footer', $data);
    }
}