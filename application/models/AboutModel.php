<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AboutModel extends CI_Model
{
    function showAbout($table)
    {
        $qry = $this->db->get($table)->row();
        return $qry;
    }

    function detailAbout($table, $id)
    {
        $this->db->where('id_site', $id);
        $qry = $this->db->get($table)->row();
        return $qry;
    }

    function updateAbout($table, $id, $data)
    {
        $this->db->where('id_site', $id);
        $qry = $this->db->update($table, $data);
        return $qry;
    }
}
