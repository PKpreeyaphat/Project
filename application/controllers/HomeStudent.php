<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class HomeStudent extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();

        if(!isset($this->session))
        {
            redirect('Login');
            return;
        }
        $Username = $this->session->userdata('user_id');
        if(!is_numeric($Username)){
            redirect('HomeAdmin');
        }
    }

    public function index()
    {
        $this->load->model('CurrentSemester_Model');
        $Student_id = $this->session->userdata('user_id');
        $Semester = $this->CurrentSemester_Model->getSemester();
        $this->load->model('AllSubject_Model');
        $data['subject'] = $this->AllSubject_Model->getUnRegister($Student_id, $Semester->Semester_ID);
        $data['semester'] = $Semester;
        $this->load->view('home_student', $data);
    }

    public function SelectSubject(){
        $Subject_id = $this->input->post('id');
        $this->session->Subject_id = $Subject_id;
        $this->session->Semester_ID = $this->CurrentSemester_Model->getSemester_ID();
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('Login');
        
    }


}

/* End of file HomeStudent.php */


?>

