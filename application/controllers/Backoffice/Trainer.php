<?php

class Trainer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TrainerModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');

        $data['data'] = $this->TrainerModel->showTrainer('tbl_trainer');

        $this->load->view('backoffice/page/trainer/v_index', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function create()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $this->load->view('backoffice/page/trainer/v_create');
        $this->load->view('backoffice/style/v_footer');
    }

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'image_trainer' => $this->_uploadImage(),
            'name_trainer' => $post['name_trainer']
        ];
        $qry = $this->TrainerModel->addTrainer('tbl_trainer', $data);
        if ($qry) {

            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil ditambahkan.
            </div>');
            redirect('backoffice/trainer');
        }
    }

    public function edit($id)
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');

        $data['data'] = $this->TrainerModel->detailTrainer('tbl_trainer', $id);

        $this->load->view('backoffice/page/trainer/v_edit', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'image_trainer' => $this->_uploadImage(),
            'name_trainer' => $post['name_trainer'],
        ];
        $qry = $this->TrainerModel->updateTrainer('tbl_trainer', $id, $data);
        if ($qry) {

            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil diubah.
            </div>');
            redirect('backoffice/trainer');
        }
    }

    public function delete($id)
    {
        $qry = $this->TrainerModel->deleteImage('tbl_trainer', $id);
        $qry = $this->TrainerModel->deleteTrainer('tbl_trainer', $id);
        if ($qry) {

            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil dihapus.
            </div>');
            redirect('backoffice/trainer');
        }
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './assets/images/trainer';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['overwrite']            = true;
        $config['max_size']             = 5048; // 5MB
        $config['overwrite']            = true;
        $config['file_name']            = time() . $_FILES["userfiles"]['name'];


        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image_trainer')) {
            $error = $this->upload->display_errors();
            print_r($error);
        } else {
            return $this->upload->data('file_name');
        }
    }
}
