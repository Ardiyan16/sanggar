<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PenyewaanModel extends CI_Model
{
    private $tabel = 'tbl_penyewaan';

    public function v_trans_sewa()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function v_penyewaan()
    {
        $this->db->select('*');
        $this->db->from('tbl_penyewaan');
        $this->db->join('tb_kostume', 'tb_kostume.id_costume = tbl_penyewaan.id_costume');
        $this->db->join('tb_user', 'tb_user.id_user = tbl_penyewaan.id_user');
        $this->db->where('tbl_penyewaan.status', 1);
        return $this->db->get()->result();
    }

    public function riwayat()
    {
        $this->db->select('*');
        $this->db->from('tbl_penyewaan');
        $this->db->join('tb_kostume', 'tb_kostume.id_costume = tbl_penyewaan.id_costume');
        $this->db->join('tb_user', 'tb_user.id_user = tbl_penyewaan.id_user');
        $this->db->where('tbl_penyewaan.status', 3);
        return $this->db->get()->result();
    }

    public function v_penyewaan2()
    {
        $this->db->select('*');
        $this->db->from('tbl_penyewaan');
        $this->db->join('tb_kostume', 'tb_kostume.id_costume = tbl_penyewaan.id_costume');
        $this->db->join('tb_user', 'tb_user.id_user = tbl_penyewaan.id_user');
        $this->db->where('tbl_penyewaan.status', 2);
        return $this->db->get()->result();
    }

    public function getbyid($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_penyewaan');
        $this->db->join('tb_kostume', 'tb_kostume.id_costume = tbl_penyewaan.id_costume');
        $this->db->where('id_penyewaan', $id);
        return $this->db->get()->row();
        //return $this->db->get_where($this->tabel, ["id_penyewaan" => $id])->row();
    }

    function save($where)
    {
        $this->db->insert($this->tabel, $where);
        return $this->db->insert_id();
    }

    function kirim_notif($where)
    {
        $this->db->insert('tbl_notifikasi', $where);
        return $this->db->insert_id();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_penyewaan = $post['id_penyewaan'];
        $this->id_costume = $post['id_costume'];
        $this->tanggal_sewa = $post['tanggal_sewa'];
        $this->tanggal_kembali = $post['tanggal_kembali'];
        $this->total_kostum = $post['total_kostum'];
        $this->total_pembayaran = $post['total_pembayaran'];
        $this->metode_pembayaran = $post['metode_pembayaran'];
        $this->foto_tf = $this->_uploadImage();
        $this->id_user = $post['id_user'];
        $this->status = $post['status'];

        $this->db->update($this->tabel, $this, array('id_penyewaan' => $post['id_penyewaan']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './assets/images/bukti_tf';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
        $nama_lengkap = $_FILES['foto_tf']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_tf')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }

    public function update_status($id)
    {
        $this->db->query("UPDATE `tbl_penyewaan` SET `status`= '2' WHERE tbl_penyewaan.id_penyewaan ='$id'");
    }

    public function delete($id)
    {
        // $this->_deleteImage($id);
        return $this->db->delete($this->tabel, array("id_penyewaan" => $id));
    }

    public function update_status2($id)
    {
        $this->db->query("UPDATE `tbl_penyewaan` SET `status`= '3' WHERE tbl_penyewaan.id_penyewaan ='$id'");
    }
}
