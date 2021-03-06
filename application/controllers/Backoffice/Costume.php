<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Costume extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->library('form_validation');
        $this->load->model('CostumeModel');
        $this->load->model('JadwalModel');
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
        $data['data'] = $this->CostumeModel->get();
        $this->load->view('backoffice/page/costume/v_index', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function create()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['data'] = $this->CostumeModel->get_tari();
        $this->load->view('backoffice/page/costume/v_create', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function save()
    {
        $save = $this->CostumeModel;
        $save->save();
        echo "<script>
        alert('Data kostum berhasil disimpan');
        window.location.href = '" . base_url('Backoffice/Costume') . "';
    </script>";
    }

    public function edit($id)
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['edit'] = $this->CostumeModel->getbyid($id);
        $data['data'] = $this->CostumeModel->get_tari();
        $this->load->view('backoffice/page/costume/v_edit', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function update()
    {
        $update = $this->CostumeModel;
        $update->update();
        echo "<script>
        alert('Data kostum berhasil diubah');
        window.location.href = '" . base_url('Backoffice/Costume') . "';
    </script>";
    }

    public function delete($id)
    {
        $this->CostumeModel->delete($id);
        redirect(site_url('Backoffice/Costume'));
    }
}
