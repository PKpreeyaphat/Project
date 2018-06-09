<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page2_Model extends CI_Model
{

    public function insertSubject($data)
    {
        $insert = $this->db->insert('Subject', $data);
        return $insert;
    }

    public function getAllSubject()
    {
        $res = $this->db->get('Subject');
        return $res->result();
    }

    public function getSubjectByID($id)
    {
        $this->db->where('Subject_id', $id);
        $query = $this->db->get('Subject');
        return $query->result();        
    }

    public function deleteAllSubject()
    {
        $this->db->query("DELETE FROM Subject WHERE 1");
    }

}

/* End of file Page2_Model.php */
