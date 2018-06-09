<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class HomeStudent extends CI_Controller {

    public function index()
    {
        $this->load->model('AllSubject_Model');
        $data['subject'] = $this->AllSubject_Model->getSubject();
        $this->load->view('home_student', $data);
    }

    public function SelectSubject(){
        $Subject_id = $this->input->post('id');
        $this->session->Subject_id = $Subject_id;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('Login');
        
    }


}

/* End of file HomeStudent.php */


?>

