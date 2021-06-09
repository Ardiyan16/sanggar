<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Penyewaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenyewaanModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['sewa'] = $this->PenyewaanModel->v_penyewaan();
        $data['sewa_new'] = $this->PenyewaanModel->v_penyewaan2();
        $this->load->view('backoffice/page/v_penyewaan', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function terima_sewa($id)
    {
        $this->PenyewaanModel->update_status($id);
        echo "<script>
        alert('Penyewaan telah di konfirmasi');
        window.location.href = '" . base_url('backoffice/penyewaan') . "';
    </script>";
    }

    public function kirim_notif()
    {
        $waktu = date("Y-m-d h:i:sa");
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'keterangan' => 'Penyewaan anda telah dikonfirmasi dan telah diterima silahkan ambil kostum ke sanggar kami',
            'waktu' => $waktu,
            'status' => '1',
        );
        $this->PenyewaanModel->kirim_notif($data);
        echo "<script>
        alert('Notifikasi berhasil dikirimkan');
        window.location.href = '" . base_url('backoffice/penyewaan') . "';
    </script>";
    }

    public function delete($id)
    {
        $this->PenyewaanModel->delete($id);
        redirect(site_url('Backoffice/Penyewaan'));
    }

    public function arsip($id)
    {
        $this->PenyewaanModel->update_status2($id);
        echo "<script>
        alert('Penyewaan berhasil diarsipkan');
        window.location.href = '" . base_url('backoffice/penyewaan') . "';
    </script>";
    }

    public function riwayat_penyewaan()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['sewa_new'] = $this->PenyewaanModel->riwayat();
        $this->load->view('backoffice/page/riwayat/v_riwayat_penyewaan', $data);
        $this->load->view('backoffice/style/v_footer');
    }
}
