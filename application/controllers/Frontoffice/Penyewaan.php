<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Penyewaan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->library('form_validation');
        $this->load->model('CostumeModel');
	}

    public function index()
    {
        $data['judul'] = 'Penyewaan Kostum';
        $data['kostum'] = $this->CostumeModel->view();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user2', $data);
        $this->load->view('frontoffice/page2/v_penyewaan', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }

    public function form_sewa($id)
    {
        $data['judul'] = 'Form Penyewaan';
        $data['view'] = $this->CostumeModel->getbyid($id);
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user2');
        $this->load->view('frontoffice/page2/v_form_penyewaan', $data);
        $this->load->view('frontoffice/style/v_footer');
    }
}