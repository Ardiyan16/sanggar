<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel', 'dashboard');
    }
    public function index()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');

        $data['trainer'] = $this->dashboard->countTrainer('tbl_trainer');
        $data['user'] = $this->dashboard->countUser('tbl_user');

        $this->load->view('backoffice/page/v_dashboard', $data);
        $this->load->view('backoffice/style/v_footer');
    }
}
