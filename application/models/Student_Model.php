<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Student_Model extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert('Student', $data);
    }

    public function getStudentByID($id)
    {
        $this->db->where('Student_id', $id);
        $res = $this->db->get('Student');
        return $res->result(); 
    }    

    public function update($id, $data)
    {
        $this->db->where('Student_id', $id);
        $this->db->update('Student', $data);
        return true;
    }

    public function deleteAllStudent()
    {
        $this->db->query("DELETE FROM Student WHERE 1");
    }

    public function getAllStudent()
    {
        $query = $this->db->get('Student');
        return $query->result();
    }

}

/* End of file Student_Model.php */
