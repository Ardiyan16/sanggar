<?php
class DashboardModel extends CI_Model
{
    function countTrainer($table)
    {
        $this->db->select('COUNT(id_trainer) as count');
        $qry = $this->db->get($table)->row();
        return $qry;
    }

    function countUser()
    {
        $this->db->select('COUNT(id_user) as count');
        $this->db->from('tb_user');
        $this->db->where('status', 'anggota sanggar');
        $qry = $this->db->get()->row()->count;
        return $qry;
    }

    public function jml_anggota()
    {
        $sql = "SELECT count(id) as jumlahkritik FROM kritiksaran";
        $jumlahkritik = $this->db->query($sql);
        return $jumlahkritik->row()->jumlahkritik;
    }

    public function user()
    {
        return $this->db->get('tb_user')->result();
    }

    public function v_user()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('status', 'anggota sanggar');
        return $this->db->get()->result();
    }

    public function pelatih()
    {
        return $this->db->get('tbl_trainer')->result();
    }

    public function anggota()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('kategori', 'Dewasa-Remaja');
        $this->db->where('status', 'anggota sanggar');
        return $this->db->get()->result();
    }

    public function anggota2()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('kategori', 'Anak-Anak ');
        $this->db->where('status', 'anggota sanggar');
        return $this->db->get()->result();
    }

    public function prestasi()
    {
        return $this->db->get('tbl_achievement')->result();
    }
}
