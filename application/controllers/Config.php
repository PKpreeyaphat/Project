<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();

        if(!isset($this->session))
        {
            redirect('Login');
            return;
        }
        $Username = $this->session->userdata('user_id');
        if(is_numeric($Username)){
            redirect('HomeStudent');
        }
    }

    public function index()
    {
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Semester_Model');
        $semester = $this->CurrentSemester_Model->getSemester();
        $last = $this->Semester_Model->Last();
        if(count($last) > 0){
            $last = $last[0];
            if($semester->Semester_ID != $last->Semester_ID){
                $data = array(
                    'Semester_ID' => $last->Semester_ID,
                    'isOpen' => 0
                );
                $this->CurrentSemester_Model->save($data);
                $semester = $this->CurrentSemester_Model->getSemester();
            }
        }

        $data['semester'] = $semester;
        $this->load->view('config_view', $data);
    }
    
    public function OpenRegister()
    {
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Semester_Model');

        $isOpen = $this->input->get('isOpen');
        $last = $this->Semester_Model->Last();
        if(count($last) > 0)
        {
            $last = $last[0];
            $data = array(
                'Semester_ID' => $last->Semester_ID,
                'isOpen' => $isOpen
            );
            $this->CurrentSemester_Model->save($data);
        }
    }

}

/* End of file Config.php */


?>