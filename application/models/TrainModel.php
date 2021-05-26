<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TrainModel extends CI_Model
{
    function showEvent($table)
    {
        $this->db->join('tbl_training', 'tbl_training.id_event=' . $table . '.id_event', 'left');
        $qry = $this->db->get($table)->result();
        return $qry;
    }
    function addTrainEvent($table, $data)
    {
        $qry = $this->db->insert($table, $data);
        return $qry;
    }
    function deleteEvent($table, $id)
    {
        $this->db->where('id_achiev', $id);
        $qry = $this->db->delete($table);
        return $qry;
    }

    function deleteEventTrain($table, $id)
    {
        $this->db->where('event_id', $id);
        $qry = $this->db->delete($table);
        return $qry;
    }

    function detailEvent($table, $id)
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
