<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class AllSubject_Model extends CI_Model {

    public function getSubject()
    {
        $query = $this->db->get('Subject');
        return $query->result();
    }

    public function getSubjectById($id)
    {
        $query = $this->db->where('Subject_id', $id);
        $query = $this->db->get('Subject');
        $result = $query->result();
        return (count($result) == 1)? $result[0] : null;
    }

}

/* End of file AllSubject_Model.php */


?>