<?php
class TrainerModel extends CI_Model
{
    function showTrainer($table)
    {
        $qry = $this->db->get($table)->result();
        return $qry;
    }

    function addTrainer($table, $data)
    {
        $qry = $this->db->insert($table, $data);
        return $qry;
    }

    function detailTrainer($table, $id)
    {
        $this->db->where('id_trainer', $id);
        $qry = $this->db->get($table)->row();
        return $qry;
    }

    function updateTrainer($table, $id, $data)
    {
        $this->db->where('id_trainer', $id);
        $del = $this->db->get($table)->row();


        $this->db->where('id_trainer', $id);
        $qry = $this->db->update($table, $data);
        if ($qry) {
            unlink(FCPATH . '/assets/images/trainer/' . $del->image_trainer);
        }
        return $qry;
    }

    function deleteTrainer($table, $id)
    {
        $this->db->where('id_trainer', $id);
        $qry = $this->db->delete($table);
        return $qry;
    }


    function deleteImage($table, $id)
    {
        $this->db->where('id_trainer', $id);
        $qry = $this->db->get($table)->row();
        unlink(FCPATH . '/assets/images/trainer/' . $qry->image_trainer);

        return $qry;
    }
}
