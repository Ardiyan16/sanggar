<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PenyewaanModel extends CI_Model
{
    private $tabel = 'tb_trans_sewa';

    public function v_trans_sewa()
    {
        return $this->db->get($this->tabel)->result();
    }

    public function getbyid($id)
    {
        return $this->db->get_where($this->tabel, ["id_penyewaan" => $id])->row();
    }

    function save($where)
    {
        $this->db->insert($this->tabel, $where);
        return $this->db->insert_id();
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
}
