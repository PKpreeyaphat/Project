<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class StudentRegist extends CI_Controller {

    public function index()
    {
        $this->load->model('Student_Model');
        $data["user"] = $this->session->all_userdata();
        $rs = $this->Student_Model->getStudentByID($data["user"]["user_id"]);
        if(count($rs) > 0){
            $data["student"] = $rs[0];
        }
        $this->load->model('AllSubject_Model');
        $data['subject'] = $this->AllSubject_Model->getSubjectById($this->session->Subject_id);
        $this->load->view('student_regist', $data);
    }

    // public function update()
    // {
    //     if($this->input->post('submit') != null) {
	// 		$this->load->model('Student_Model');
    //     $data = array(
    //         'Student_firstname' => $this->input->post('Student_firstname'),
    //         'Student_lastname' => $this->input->post('Student_lastname'),
    //         'Student_grade' => $this->input->post('Student_grade'),
    //         'Student_email' => $this->input->post('Student_email'),
    //         'Student_tel' => $this->input->post('Student_tel')
    //     );

    //     $this->load->model('Student_Model');
    //     $this->Student_Model->update($data);

    //     redirect('StudentRegist', 'refresh');
    // }else{
    //     $this->load->model('Student_Model');
    //     $data['Student'] = $this->Student_Model->getStudentByID($id);
    //     $data['edit'] = true;
    //     $data['id'] = $id;
    //     $this->load->view('student_regist',$data);
    // }
    // }


}

/* End of file StudentRegist.php */


?>