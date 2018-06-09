<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Semester_Model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('Semester', $data);
    }

    public function Last()
    {
        return $this->db->query("SELECT * FROM `Semester` ORDER BY Semester_ID DESC LIMIT 0,1")->result();
    }

    public function deleteAllSemester()
    {
        $this->db->query("DELETE FROM Semester WHERE 1");
    }

    public function getAllSemester()
    {
        return $this->db->get('Semester')->result();
    }

}

/* End of file CurrentSemester_Model.php */
