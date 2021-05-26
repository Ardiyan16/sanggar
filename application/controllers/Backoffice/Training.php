<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Training extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('TrainModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');

        $data['data'] = $this->AchievModel->showAchiev('tbl_achievement');

        $this->load->view('backoffice/page/achiev/v_index', $data);
        $this->load->view('backoffice/style/v_footer');
    }
    public function create()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $this->load->view('backoffice/page/achiev/v_create');
        $this->load->view('backoffice/style/v_footer');
    }

    public function store_event()
    {
        $post = $this->input->post();
        $data = [
            'event_id' => $post['event_id'],
            'date_training' => $post['date_training'],
            'hour_training' => $post['hour_training']
        ];
        $qry = $this->TrainModel->addTrainEvent('tbl_training', $data);
        if ($qry) {

            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil ditambahkan.
            </div>');
            redirect('backoffice/event');
        }
    }

    public function edit($id)
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['data'] = $this->AchievModel->detailAchiev('tbl_achievement', $id);
        $this->load->view('backoffice/page/achiev/v_edit', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function update($id)
    {
        $post = $this->input->post();
        $data = [
            'id_achiev' => $id,
            'img_achiev' => $this->_uploadImage(),
            'desc_achiev' => $post['desc_achiev']
        ];
        $qry = $this->AchievModel->updateAchiev('tbl_achievement', $data);
        if ($qry) {
            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil diubah.
            </div>');
            redirect('backoffice/achiev');
        } else {

            $this->session->set_flashdata('success', '<div class="alert alert-danger">
            <strong>Gagal!</strong> Data gagal diubah.
            </div>');
            redirect('backoffice/achiev');
        }
    }

    public function show($id)
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['data'] = $this->AchievModel->detailAchiev('tbl_achievement', $id);
        $this->load->view('backoffice/page/achiev/v_show', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function delete($id)
    {
        $qry = $this->AchievModel->deleteImage('tbl_achievement', $id);
        $qry = $this->AchievModel->deleteAchiev('tbl_achievement', $id);
        if ($qry) {

            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil dihapus.
            </div>');
            redirect('backoffice/achiev');
        }
    }
    public function delete_train($id)
    {
        $qry = $this->TrainModel->deleteEventTrain('tbl_training', $id);
        if ($qry) {

            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Jadwal berhasil dihapus.
            </div>');
            redirect('backoffice/event');
        }
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './assets/images/achiev';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['overwrite']            = true;
        $config['max_size']             = 5048; // 5MB
        $config['overwrite']            = true;
        $config['file_name']            = time() . $_FILES["userfiles"]['name'];


        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img_achiev')) {
            $error = $this->upload->display_errors();
            print_r($error);
        } else {
            return $this->upload->data('file_name');
        }
    }
}
