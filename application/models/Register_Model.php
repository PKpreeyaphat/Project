<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register_Model extends CI_Model
{

    public function save($data)
    {
        if(true){
            echo json_encode($data);
            //$this->db->insert('Register', $data);
        }
        else{
            // $this->db->where('Student_id', $data->Student_id);
            // $this->db->where('Subject_id', $data->Subject_id);
            // $this->db->where('DayofWeek', $data->DayofWeek);
            // $this->db->where('Start', $data->Start);
            // $this->db->where('End', $data->End);
            // $this->db->where('Semester_ID', $data->Semester_ID);
            //$this->db->update('Register', $data);
        }
    }

    public function getRegister($data)
    {
        // $this->db->where('Student_id', $data->Student_id);
        // $this->db->where('Subject_id', $data->Subject_id);
        // $this->db->where('DayofWeek', $data->DayofWeek);
        // $this->db->where('Start', $data->Start);
        // $this->db->where('End', $data->End);
        // $this->db->where('Semester_ID', $data->Semester_ID);
        $query = $this->db->get('Register');
        return $query->result(); 
    }

    public function deleteAllRegister()
    {
        $this->db->query("DELETE FROM Register WHERE 1");
    }

    public function getAllRegister()
    {
        $query = $this->db->get('Register');
        return $query->result();
    }

}

/* End of file Student_Model.php */
