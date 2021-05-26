<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AchievModel extends CI_Model
{
    function showAchiev($table)
    {
        $qry = $this->db->get($table)->result();
        return $qry;
    }
    function addAchiev($table, $data)
    {
        $qry = $this->db->insert($table, $data);
        return $qry;
    }
    function deleteAchiev($table, $id)
    {
        $this->db->where('id_achiev', $id);
        $qry = $this->db->delete($table);
        return $qry;
    }

    function detailAchiev($table, $id)
    {
        $this->db->where('id_achiev', $id);
        $qry = $this->db->get($table)->row();

        return $qry;
    }

    function updateAchiev($table, $data)
    {

        $this->db->where('id_achiev', $data['id_achiev']);
        $del = $this->db->get($table)->row();

        $this->db->where('id_achiev', $data['id_achiev']);
        $qry = $this->db->update($table, $data);
        if ($qry) {
            unlink(FCPATH . '/assets/images/achiev/' . $del->img_achiev);
        }
        return $qry;
    }

    function deleteImage($table, $id)
    {
        $this->db->where('id_achiev', $id);
        $qry = $this->db->get($table)->row();
        unlink(FCPATH . '/assets/images/achiev/' . $qry->img_achiev);

        return $qry;
    }
}
