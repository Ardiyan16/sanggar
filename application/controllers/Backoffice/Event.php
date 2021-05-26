<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Event extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('EventModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');

        $data['data'] = $this->EventModel->showEvent('tbl_event');

        $this->load->view('backoffice/page/event/v_index', $data);
        $this->load->view('backoffice/style/v_footer');
    }
    public function create()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $this->load->view('backoffice/page/event/v_create');
        $this->load->view('backoffice/style/v_footer');
    }

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'name_event' => $post['name_event'],
            'date_event' => $post['date_event']
        ];
        $qry = $this->EventModel->addEvent('tbl_event', $data);
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
        $data['data'] = $this->EventModel->detailEvent('tbl_event', $id);
        $this->load->view('backoffice/page/event/v_edit', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function update($id)
    {
        $post = $this->input->post();
        $dataEvent = [
            'id_event' => $id,
            'name_event' => $post['name_event'],
            'date_event' => $post['date_event'],

        ];
        $dataTraining = [
            'event_id' => $post['event_id'],
            'date_training' => $post['date_training'],
            'hour_training' => $post['hour_training']
        ];
        $qry = $this->EventModel->updateEvent('tbl_event', $dataEvent, $dataTraining);
        if ($qry) {
            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil diubah.
            </div>');
            redirect('backoffice/event');
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
        $data['data'] = $this->EventModel->detailEvent('tbl_event', $id);
        $this->load->view('backoffice/page/event/v_show', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function delete($id)
    {
        $qry = $this->EventModel->deleteEvent('tbl_event', $id);
        if ($qry) {

            $this->session->set_flashdata('success', '<div class="alert alert-success">
            <strong>Success!</strong> Data berhasil dihapus.
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
