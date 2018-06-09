<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Table_Model extends CI_Model {

    public function getRoom()
    {
        $this->db->from('Room');
		$this->db->order_by("Room_name", "asc");
		$query = $this->db->get(); 
		return $query->result();
    }

    public function getRoomByID($id){
    	$this->db->from('Room');
    	$this->db->where('Room_id', $id);
    	$query = $this->db->get(); 
		return $query->result();
    }

    public function getTimeByRoomID($id){
        $sql = "SELECT * FROM `Section` INNER JOIN Semester ON Semester.Semester_ID = Section.Semester_ID WHERE Room_id = ".$id." AND date(now()) < Semester.Semester_Start && date(now()) < Semester.Semester_Stop";
        $res = $this->db->query($sql);
        return $res->result();
    }
}

/* End of file AllSubject_Model.php */


?>