<?php
class DashboardModel extends CI_Model
{
    function countTrainer($table)
    {
        $this->db->select('COUNT(id_trainer) as count');
        $qry = $this->db->get($table)->row();
        return $qry;
    }

    function countUser($table)
    {
        $this->db->select('COUNT(id_user) as count');
        $this->db->where('type', 'user');
        $qry = $this->db->get($table)->row();
        return $qry;
    }
}
