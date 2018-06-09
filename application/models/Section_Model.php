<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Section_Model extends CI_Model {

    public function insertSection($data)
    {

      $this->db->insert('Section', $data);

    }

    public function getSectionByID($id)
    {

        $this->db->join('Subject', 'Subject.Subject_id = Section.Subject_id', 'left');
        $this->db->where('Subject.Subject_id', $id);
        $res = $this->db->get('Section');
        return $res->result();

    }


}

/* End of file Section_Model.php */


?>