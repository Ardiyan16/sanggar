<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel', 'dashboard');
        if (empty($this->session->userdata('username'))) {
            echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '" . base_url('Auth') . "';
            </script>"; //Url tujuan
        }
    }
    public function index()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');

        $data['trainer'] = $this->dashboard->countTrainer('tbl_trainer');
        $data['user'] = $this->dashboard->jml_user('tbl_user');

        $this->load->view('backoffice/page/v_dashboard', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function user()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['data'] = $this->dashboard->user();
        $this->load->view('backoffice/page/v_user', $data);
        $this->load->view('backoffice/style/v_footer');
    }
}
