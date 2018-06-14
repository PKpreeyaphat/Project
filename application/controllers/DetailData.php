<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class DetailData extends CI_Controller {
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
        $this->load->model('Page2_Model');
        $data['subject'] = $this->Page2_Model->getAllSubject();
        $this->load->view('detail_data', $data);
    }



}

/* End of file Controllername.php */


?>
  