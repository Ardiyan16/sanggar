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
        $this->load->model('PenyewaanModel');
    }

    public function index()
    {
        $data['judul'] = 'Penyewaan Kostum';
        $data['kostum'] = $this->CostumeModel->view();
        // $data['notif'] = $this->db->from('tbl_notifikasi')->where(['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->get()->result();
        $data['proses'] = $this->db->get_where('tbl_penyewaan', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar_user2', $data);
        $this->load->view('frontoffice/page2/v_penyewaan', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }

    public function form_sewa($id)
    {
        $data['judul'] = 'Form Penyewaan';
        $data['view'] = $this->CostumeModel->getbyid($id);
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->view('frontoffice/style/v_header', $data);
        // $this->load->view('frontoffice/style/v_navbar_user2');
        $this->load->view('frontoffice/page2/v_form_penyewaan', $data);
        // $this->load->view('frontoffice/style/v_footer');
    }

    public function form_sewa2($id)
    {
        $data['judul'] = 'Form Penyewaan';
        $data['view'] = $this->CostumeModel->getbyid($id);
        $data['sewa'] = $this->PenyewaanModel->getbyid($id);
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->view('frontoffice/style/v_header', $data);
        // $this->load->view('frontoffice/style/v_navbar_user2');
        $this->load->view('frontoffice/page2/v_form_penyewaan2', $data);
        // $this->load->view('frontoffice/style/v_footer');
    }

    public function save()
    {
        $data = array(
            'id_penyewaan' => $this->input->post('id_penyewaan'),
            'id_costume' => $this->input->post('id_costume'),
            'tanggal_sewa' => $this->input->post('tanggal_sewa'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'total_kostum' => $this->input->post('total_kostum'),
            'total_pembayaran' => $this->input->post('total_pembayaran'),
            'metode_pembayaran' => $this->input->post('metode_pembayaran'),
            'foto_tf' => '01.jpg',
            'id_user' => $this->input->post('id_user'),
            'status' => '1',
        );
        $this->PenyewaanModel->save($data);
        // $id = $this->input->post('id_service');
        // $this->M_invoice->update_status($id);
        redirect('frontoffice/Penyewaan/form_sewa2/' . $this->input->post('id_penyewaan'));
    }

    public function update()
    {
        $update = $this->PenyewaanModel;
        $update->update();
        echo "<script>
        alert('Data penyewaan anda berhasil dikirim tunggu konfirmasi dari kami ke email anda');
        window.location.href = '" . base_url('Frontoffice/penyewaan') . "';
    </script>";
    }
}
