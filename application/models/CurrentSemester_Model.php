<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CurrentSemester_Model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('CurrentSemester', $data);
    }

    public function getSemester_ID(){
        $rs = $this->getAllCurSemester();
        if(count($rs) > 0){
            return $rs[0]->Semester_ID;
        }
        return 0;
    }

    public function getSemester(){
        $rs = $this->getAllCurSemester();
        if(count($rs) > 0){
            return $rs[0];
        }
        return null;
    }

    public function save($data)
    {
        $this->deleteAllCurSemester();
        $this->insert($data);
    }

    public function deleteAllCurSemester()
    {
        $this->db->query("DELETE FROM CurrentSemester WHERE 1");
    }

    public function getAllCurSemester()
    {
        return $this->db->query("SELECT Semester.Semester_ID, Semester_Name, Semester.Semester_Year, isOpen 
        FROM CurrentSemester NATURAL JOIN Semester")->result();
    }

}

/* End of file CurrentSemester_Model.php */
