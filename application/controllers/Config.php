<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

    public function index()
    {
        $this->load->model('CurrentSemester_Model');
        $data['semester'] = $this->CurrentSemester_Model->getSemester();
        $this->load->view('config_view', $data);
    }
    
    public function OpenRegister()
    {
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Semester_Model');

        $isOpen = $this->input->get('isOpen');
        echo $isOpen;
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