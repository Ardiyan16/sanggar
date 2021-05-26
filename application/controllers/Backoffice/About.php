<?php
defined('BASEPATH') or exit('No direct script access allowed');



class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');

        $data['data'] = $this->AboutModel->showAbout('tbl_site');

        $this->load->view('backoffice/page/about/v_index', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function edit($id)
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');

        $data['data'] = $this->AboutModel->detailAbout('tbl_site', $id);

        $this->load->view('backoffice/page/about/v_edit', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'name_site' => $post['name_site'],
            'since_site' => $post['since_site'],
            'owner_site' => $post['owner_site'],
            'email_site' => $post['email_site'],
            'address_site' => $post['address_site'],
            'logo_site' => $this->_uploadLogo(),
        ];
        $qry = $this->AboutModel->updateAbout('tbl_site', $id, $data);
        if ($qry) {
            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil diubah.
            </div>');
            redirect('backoffice/achiev');
        } else {

            $this->session->set_flashdata('success', '<div class="alert alert-danger">
            <strong>Gagal!</strong> Data gagal diubah.
            </div>');
            redirect('backoffice/about');
        }
    }

    private function _uploadLogo()
    {
        $config['upload_path']          =  './assets/images';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['overwrite']            = true;
        $config['max_size']             = 5048; // 5MB
        $config['overwrite']            = true;
        $config['file_name']            = "logo";


        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('logo_site')) {
            $error = $this->upload->display_errors();
            print_r($error);
        } else {
            return $this->upload->data('file_name');
        }
    }
}
