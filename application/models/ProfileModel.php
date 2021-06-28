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
        if (!empty($_FILES["foto_profile"]["name"])) {
            $this->foto_profile = $this->_uploadImage();
        } else {
            $this->foto_profile = $post["old_foto"];
        }

        $this->db->update($this->tabel, $this, array('id_user' => $post['id_user']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './assets/images/foto_profile';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
        $nama_lengkap = $_FILES['foto_profile']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 10240;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_profile')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }
}
