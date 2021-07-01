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
        if (empty($this->session->userdata('email'))) {
            echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '" . base_url('Auth/login_user') . "';
            </script>"; //Url tujuan
        }
    }

    public function index()
    {
        if ($this->input->get('submit')) {
            $data['search'] = $this->input->get('search');
        } else {
            $data['search'] = $this->session->unset_userdata('search');
        }
        // $this->db->like('nama', $data['search']);
        // $this->db->from('tb_kostume');
        // $this->db->join('tb_jenis_tari', 'tb_jenis_tari.id = tb_kostume.id');


        $data['judul'] = 'Penyewaan Kostum';
        $data['kostum'] = $this->CostumeModel->view($data['search']);
        $data['notif'] = $this->db->get_where('tbl_notifikasi', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->row_array();
        $data['proses'] = $this->db->get_where('tbl_penyewaan', ['id_user' => $this->session->userdata('id_user'), 'status' => '1'])->row_array();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar2', $data);
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

    public function riwayat()
    {
        $id = $this->session->userdata('id_user');
        $data['judul'] = 'Riwayat';
        $data['kostum'] = $this->CostumeModel->get();
        $data['data'] = $this->PenyewaanModel->v_riwayat($id);
        $data['sewa'] = $this->PenyewaanModel->all();
        $this->load->view('frontoffice/style/v_header', $data);
        $this->load->view('frontoffice/style/v_navbar2', $data);
        $this->load->view('frontoffice/page2/v_riwayat', $data);
        $this->load->view('frontoffice/style/v_footer', $data);
    }
}
