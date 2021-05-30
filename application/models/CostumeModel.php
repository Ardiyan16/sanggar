<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CostumeModel extends CI_Model
{
    private $tabel = 'tb_costume';

    public function view()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function get_tari()
    {
        return $this->db->get('tb_jenis_tari')->result();
    }

    public function getbyid($id)
    {
        return $this->db->get_where($this->tabel, ["id_costume" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->foto = $this->_uploadImage();
        $this->deskripsi = $post['deskripsi'];
        $this->id = $post['id'];

        $this->db->insert($this->tabel, $this);

    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './assets/images/costume';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
        $config['overwrite']            = true;
        $config['max_size']             = 5048; // 5MB
        $config['overwrite']            = true;
        $config['file_name']            = time() . $_FILES["userfiles"]['name'];


        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            print_r($error);
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_costume = $post['id_costume'];
        $this->nama = $post['nama'];
        if (!empty($_FILES["userfiles"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->deskripsi = $post['deskripsi'];
        $this->id = $post['id'];

        $this->db->update($this->tabel, $this, array('id_costume' => $post['id_costume']));

    }

}