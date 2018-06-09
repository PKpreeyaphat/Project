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
