<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Import_Model extends CI_Model {

    public function insert($data)
    {
        $this->db->trans_start();
        $this->db->insert('Section', $data);
        $this->db->trans_complete();
    }

    public function getAllSection()
    {
        $this->db->join('Room', 'Room.Room_id = Section.Room_id', 'left');
        $this->db->order_by('Section_id', 'ASC');
        $query = $this->db->get('Section');
        return $query->result();
    }

    public function deleteAllSection()
    {
        $this->db->query("DELETE FROM Section WHERE 1");
    }

}

/* End Page1_Model.php */

?>
