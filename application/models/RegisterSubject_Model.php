<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RegisterSubject_Model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('RegisterSubject', $data);
    }

    public function save($data)
    {
        if(count($this->getRegisterSubject($data)) == 0){
            $this->db->insert('RegisterSubject', $data);
        }
        else{
            $this->db->where('Student_id', $data['Student_id']);
            $this->db->where('Subject_id', $data['Subject_id']);
            $this->db->where('Semester_ID', $data['Semester_ID']);
            $this->db->update('RegisterSubject', $data);
        }
    }

    public function getRegisterSubject($data)
    {
        $this->db->from('RegisterSubject');
        $this->db->where('Student_id', $data['Student_id']);
        $this->db->where('Subject_id', $data['Subject_id']);
        $this->db->where('Semester_ID', $data['Semester_ID']);
        $query = $this->db->get();
        return $query->result(); 
    }

    public function deleteAllRegisterSubject()
    {
        $this->db->query("DELETE FROM RegisterSubject WHERE 1");
    }

    public function getAllRegisterSubject()
    {
        return $this->db->get('RegisterSubject')->result();
    }

}

/* End of file Register_Model.php */
