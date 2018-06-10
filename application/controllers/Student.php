<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function index()
    {
        $this->load->model('Student_Model');
        $data["user"] = $this->session->all_userdata();
        $rs = $this->Student_Model->getStudentByID($data["user"]["user_id"]);
        if(count($rs) > 0){
            $data["student"] = $rs[0];
        }
        $this->load->view('student_form', $data);

    }

    public function SaveStudent(){
        $this->load->model('Student_Model');

        $email = $this->input->post('email');
        $tel = $this->input->post('tel');

        $data["user"] = $this->session->all_userdata();
        $rs = $this->Student_Model->getStudentByID($data["user"]["user_id"]);
        if(count($rs) > 0){
            $student = $rs[0];
            $student->Student_email = $email;
            $student->Student_tel = $tel;
            $this->Student_Model->update($student->Student_id, $student);
        }
    }
}

/* End of file Student.php */


?>
    $this->load->view('student_form');
