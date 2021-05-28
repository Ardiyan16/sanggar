<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProfileModel extends CI_Model
{
    private $tabel = 'tb_user';


    public function update_profile()
    {
        $post = $this->input->post();
        $this->id_user = $post['id_user'];
        $this->nama_lengkap = $post['nama_lengkap'];
        $this->alamat = $post['alamat'];
        $this->no_telepon = $post['no_telepon'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->kategori = $post['kategori'];
        $this->status = $post['status'];

        $this->db->update($this->tabel, $this, array('id_user' => $post['id_user']));
    }
}