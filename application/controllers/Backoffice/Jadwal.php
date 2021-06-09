<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['data'] = $this->JadwalModel->view();
        $this->load->view('backoffice/page/penjadwalan/v_index', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function create()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        //$data['data'] = $this->JadwalModel->view();
        $this->load->view('backoffice/page/penjadwalan/v_create');
        $this->load->view('backoffice/style/v_footer');
    }

    public function save()
    {
        $save = $this->JadwalModel;
        $save->save();
        echo "<script>
        alert('Data jadwal berhasil disimpan');
        window.location.href = '" . base_url('Backoffice/Jadwal') . "';
    </script>";
    }

    public function edit($id)
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['edit'] = $this->db->get_where('tbl_jadwal', ['id_jadwal' => $id])->row_array();
        $this->load->view('backoffice/page/penjadwalan/v_edit', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function update()
    {
        $update = $this->JadwalModel;
        $update->update();
        echo "<script>
        alert('Data jadwal berhasil diupdate');
        window.location.href = '" . base_url('Backoffice/Jadwal') . "';
    </script>";
    }

    public function delete($id)
    {
        $this->JadwalModel->delete($id);
        redirect(site_url('Backoffice/Jadwal'));
    }

    public function absensi($id)
    {
        $sts = 'anggota sanggar';
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        $data['edit'] = $this->db->get_where('tbl_jadwal', ['id_jadwal' => $id])->row_array();
        if ($kategori = $this->input->get('kategori')) {
            $data['absen'] = $this->db->get_where('tb_user', ['kategori' => $kategori], ['status' => $sts])->result();
        } else {
            $data['absen'] = $this->db->get_where('tb_user', ['status' => $sts])->result();
        }
        $this->load->view('backoffice/page/penjadwalan/v_absensi', $data);
        $this->load->view('backoffice/style/v_footer');
    }

    public function save_absen()
    {
        $id_user = $this->input->post('id_user');
        for ($key = 0; $key < sizeof($id_user); $key++) {
            $status = $_POST['status' . $key];
            $data = array(
                'id_user' => $id_user[$key],
                'status' => $status,
                'id_jadwal' => $this->input->post('id_jadwal')
            );
            $jadwal = $this->JadwalModel->save_absen($data);
        }
        // echo $data();
        echo "<script>
            alert('Data absen berhasil disimpan');
            window.location.href = '" . base_url('Backoffice/Jadwal') . "';
        </script>";
    }

    public function v_absen()
    {
        $this->load->view('backoffice/style/v_header');
        $this->load->view('backoffice/v_sidebar');
        if ($tgl = $this->input->get('tanggal')) {
            $data['data'] = $this->JadwalModel->view_absen2($tgl);
        } else {
            $data['data'] = $this->JadwalModel->view_absen();
        }
        $this->load->view('backoffice/page/penjadwalan/v_index_absen', $data);
        $this->load->view('backoffice/style/v_footer');
    }
}
