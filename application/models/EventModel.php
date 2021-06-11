<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EventModel extends CI_Model
{
    public function view_training()
    {
        $this->db->select('*');
        $this->db->from('tbl_training');
        $this->db->join('tbl_event', 'tbl_event.id_event = tbl_training.id_event');
        return $this->db->get()->result();
    }

    function showEvent($table)
    {
        $this->db->join('tbl_training', 'tbl_training.event_id=' . $table . '.id_event', 'left');
        $qry = $this->db->get($table)->result();
        return $qry;
    }
    function addEvent($table, $data)
    {
        $qry = $this->db->insert($table, $data);
        return $qry;
    }
    function deleteEvent($table, $id)
    {
        $this->db->where('id_event', $id);
        $qry = $this->db->delete($table);

        $this->db->where('event_id', $id);
        $qry = $this->db->delete('tbl_training');
        return $qry;
    }

    function detailEvent($table, $id)
    {
        $this->db->join('tbl_training', 'tbl_training.event_id=' . $table . '.id_event', 'left');
        $this->db->where('id_event', $id);
        $qry = $this->db->get($table)->row();

        return $qry;
    }

    function updateEvent($table, $dataEvent, $dataTraining)
    {
        $this->db->where('id_event', $dataEvent['id_event']);
        $qry = $this->db->update($table, $dataEvent);

        if ($dataTraining['event_id']) {
            $this->db->where('event_id', $dataTraining['event_id']);
            $qry = $this->db->update('tbl_training', $dataTraining);
        }
        return $qry;
    }
}
