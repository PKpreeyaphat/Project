<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Room_Model extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert('Room', $data);
    }

    public function getAllRoom()
    {
        $query = $this->db->get('Room');
        return $query->result();
    }

    public function getRoomByName($name)
    {
        $this->db->where('Room_name', $name);
        $query = $this->db->get('Room');
        return $query->result();
    }

    public function deleteAllRoom()
    {
        $this->db->query("DELETE FROM Room WHERE 1");
    }

    public function deleteRoom($id)
    {
        $this->db->where('Room_id', $id);        
        $this->db->delete('Room');
    }

    public function resetAI()
    {
        $this->db->query("ALTER TABLE Room AUTO_INCREMENT = 1");
    }

}

/* End of file Room_Model.php */
