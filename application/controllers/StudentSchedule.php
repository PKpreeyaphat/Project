<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class StudentSchedule extends CI_Controller {

    public function index()
    {
        $this->load->view('student_schedule');
    }

}

/* End of file StudentSchedule.php */


?>