<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model
{
    function cekAuth($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->or_where('email', $username);
        $this->db->where('password', $password);
        $this->db->where('is_active', 1);
        $qry = $this->db->get('tbl_user');

        return $qry->row();
    }
}
