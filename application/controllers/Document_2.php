<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Document_2 extends CI_Controller {

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
        
        $this->load->view('document_2');

    }

}

/* End of file Page5_2.php */


?>