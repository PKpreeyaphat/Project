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

    public function getGradeSubject($id, $Subject_id, $Semester_ID)
    {
        $sql = "SELECT std.Student_id, std.Student_email, std.Student_tel, std.Student_firstname, std.Student_lastname, reg.Grade
            FROM Student std left join `RegisterSubject` reg on std.Student_id = reg.Student_id
            and Semester_ID = ? and Subject_id = ?
            WHERE std.Student_id = ?";
        $result = $this->db->query($sql, array($Semester_ID, $Subject_id, $id));
        return $result->result(); 
    }

    public function getRegister($Student_id, $Subject_id, $Semester_ID)
    {
        $this->db->from('Register');
        $this->db->where('Student_id', $Student_id);
        $this->db->where('Subject_id', $Subject_id);
        $this->db->where('Semester_ID', $Semester_ID);
        $result = $this->db->get()->result();
        return $result;
    }

    public function getRegisterList($Student_id, $Subject_id, $Semester_ID)
    {
        $this->db->from('Register');
        $this->db->where('Student_id', $Student_id);
        $this->db->where('Subject_id', $Subject_id);
        $this->db->where('Semester_ID', $Semester_ID);
        $result = $this->db->get()->result();

        $array = array();
        foreach($result as $row){
            $array[$row->DayofWeek][$row->Start.'-'.$row->End] = ($row->isFree == 1)? true: false;
        }
        return $array;
    }

    public function deleteRegister($Student_id, $Subject_id, $Semester_ID)
    {
        $this->db->where('Student_id', $Student_id);
        $this->db->where('Subject_id', $Subject_id);
        $this->db->where('Semester_ID', $Semester_ID);
        $this->db->delete('Register');

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
