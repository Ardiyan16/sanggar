<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class NotifModel extends CI_Model
{
    private $tabel = 'tbl_notifikasi';

    public function get_notif()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from($this->tabel);
        $this->db->where('id_user', $id);
        $this->db->where('status', 1);
        return $this->db->get()->result();
    }

    public function update_status($id)
    {
        $this->db->query("UPDATE `tbl_notifikasi` SET `status`= '2' WHERE tbl_notifikasi.id_notif ='$id'");
    }
}
