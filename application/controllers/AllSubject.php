<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AllSubject extends CI_Controller {

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
        $this->load->model('AllSubject_Model');
        $data['subject'] = $this->AllSubject_Model->getSubject();
        $this->load->view('all_subject', $data);

    }

}

/* End of file AllSubject.php */



?>