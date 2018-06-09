<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register_Model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('Register', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('idRegister', $id);
        $this->db->update('Register', $data);
        return true;
    }

    public function save($data)
    {
        if(count($this->getRegister($data)) == 0){
            $this->db->insert('Register', $data);
        }
        else{
            $this->db->where('Student_id', $data['Student_id']);
            $this->db->where('Subject_id', $data['Subject_id']);
            $this->db->where('DayofWeek', $data['DayofWeek']);
            $this->db->where('Start', $data['Start']);
            $this->db->where('End', $data['End']);
            $this->db->where('Semester_ID', $data['Semester_ID']);
            $this->db->update('Register', $data);
        }
    }

    public function getRegister($data)
    {
        $this->db->from('Register');
        $this->db->where('Student_id', $data['Student_id']);
        $this->db->where('Subject_id', $data['Subject_id']);
        $this->db->where('DayofWeek', $data['DayofWeek']);
        $this->db->where('Start', $data['Start']);
        $this->db->where('End', $data['End']);
        $this->db->where('Semester_ID', $data['Semester_ID']);
        $query = $this->db->get();
        return $query->result(); 
    }

    public function deleteAllRegister()
    {
        $this->db->query("DELETE FROM Register WHERE 1");
    }

    public function getAllRegister()
    {
        return $this->db->get('Register')->result();
    }

}

/* End of file Register_Model.php */
