<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {

    public function index()
    {
        $this->load->model('AllSubject_Model');
        $data['subject'] = $this->AllSubject_Model->getSubject();
        $this->load->view('home_admin', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('Login');
        
    }

}

/* End of file Page1.php */

?>
