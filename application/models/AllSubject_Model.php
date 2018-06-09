<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class AllSubject_Model extends CI_Model {

    public function getSubject()
    {
        $query = $this->db->get('Subject');
        return $query->result();
    }

    public function getUnRegister($student_id, $semester_id)
    {
        $query_str="SELECT sj.Subject_id, sj.Subject_name, reg.Student_id
            from Subject sj LEFT JOIN Register reg ON sj.Subject_id = reg.Subject_id AND reg.Student_id = '".$student_id."' 
            AND Semester_ID = ".$semester_id."
            GROUP BY sj.Subject_id, sj.Subject_name, reg.Student_id";
        $query = $this->db->query($query_str);
        return $query->result();
    }

    public function getStudent($subject_id)
    {
        $query_str="SELECT stu.* FROM Student stu NATURAL JOIN Register reg
            WHERE reg.Subject_id = '".$subject_id."'
            GROUP BY stu.Student_id, stu.Student_firstname, stu.Student_lastname, stu.Student_grade,
            stu.Student_email,stu.Student_tel";
        $query = $this->db->query($query_str);
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