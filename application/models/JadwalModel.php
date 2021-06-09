<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class JadwalModel extends CI_Model
{
    private $tabel = 'tbl_jadwal';

    public function view()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function getbyid($id)
    {
        return $this->db->get_where($this->tabel, ["id_jadwal" => $id])->row_array();
    }

    public function v_jadwal()
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal');
        $this->db->limit('1', 'desc');
        return $this->db->get()->result();
    }

    public function view_absen()
    {
        $this->db->select('*');
        $this->db->from('tbl_absensi');
        $this->db->join('tb_user', 'tb_user.id_user = tbl_absensi.id_user', 'left outer');
        $this->db->join('tbl_jadwal', 'tbl_jadwal.id_jadwal = tbl_absensi.id_jadwal', 'left outer');
        return $this->db->get()->result();
    }

    public function view_absen2($tanggal)
    {
        $this->db->select('*');
        $this->db->from('tbl_absensi');
        $this->db->join('tb_user', 'tb_user.id_user = tbl_absensi.id_user', 'left outer');
        $this->db->join('tbl_jadwal', 'tbl_jadwal.id_jadwal = tbl_absensi.id_jadwal', 'left outer');
        $this->db->where('tbl_jadwal.tanggal', $tanggal);
        return $this->db->get()->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->hari = $post['hari'];
        $this->tanggal = $post['tanggal'];
        $this->waktu = $post['waktu'];
        $this->tempat = $post['tempat'];
        $this->deskripsi = $post['deskripsi'];
        $this->kategori = $post['kategori'];

        $this->db->insert($this->tabel, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jadwal = $post['id_jadwal'];
        $this->hari = $post['hari'];
        $this->tanggal = $post['tanggal'];
        $this->waktu = $post['waktu'];
        $this->tempat = $post['tempat'];
        $this->deskripsi = $post['deskripsi'];
        $this->kategori = $post['kategori'];

        $this->db->update($this->tabel, $this, array('id_jadwal' => $post['id_jadwal']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->tabel, array("id_jadwal" => $id));
    }

    public function save_absen($where)
    {
        $this->db->insert('tbl_absensi', $where);
		return $this->db->insert_id();
    }
}