<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller {

    public function index()
    {

        $this->load->model('Section_Model');
        $data['section'] = $this->Section_Model->getAllSection();
        $this->load->view('section_data', $data);

    }
    
    public function insertSection()
    {
        
        $data = array (
            'Section_name' => $this->input->post('Section_name'),
            'Section_room' => $this->input->post('Section_room'),
            'Subject_id' => $this->input->post('Subject_id'),

        );

        $this->load->model('Section_Model');
        $this->Section_Model->insertSection($data);

        
        redirect('section');
        

    }
}

/* End of file Setion.php */


?>