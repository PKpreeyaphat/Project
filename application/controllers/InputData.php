<?php

defined('BASEPATH') or exit('No direct script access allowed');

class InputData extends CI_Controller
{

    public function index()
    {
        $this->load->view('input_data');
    }

    public function insert()
    {
        $data = array(
            'Subject_id' => $this->input->post('Subject_id'),
            'Subject_name' => $this->input->post('Subject_name'),
        );

        $this->load->model('Page2_Model');
        $result = $this->Page2_Model->insertSubject($data);

        if($result){
            echo '<script>alert("เพิ่มรายวิชาสำเร็จ");</script>';
        } else {
            echo '<script>alert("มีรายวิชานี้ในระบบแล้ว");</script>';
        }

        redirect('ImportData', 'refresh');
    }

    public function goBack()
    {
        redirect('ImportData','location');
    }

}

/* End of file Controllername.php */
