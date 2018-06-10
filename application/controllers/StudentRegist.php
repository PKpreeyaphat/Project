<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class StudentRegist extends CI_Controller {

    public function index()
    {
        $this->load->model('Student_Model');
        $this->load->model('AllSubject_Model');
        $this->load->model('CurrentSemester_Model');
        $this->load->model('CurrentSemester_Model');
        $Semester_ID = $this->CurrentSemester_Model->getSemester_ID();
        $Subject_id = $this->session->Subject_id;
        $data["user"] = $this->session->all_userdata();
        //
        $rs = $this->Student_Model->getGradeSubject($data["user"]["user_id"], $Subject_id, $Semester_ID);
        if(count($rs) > 0){
            $data["student"] = $rs[0];
        }
        //
        //
        $data['register'] = $this->Student_Model->getRegisterList(
            $data["user"]["user_id"], 
            $Subject_id, 
            $Semester_ID);
        $data['subject'] = $this->AllSubject_Model->getSubjectById($Subject_id);
        //
        
        $data['semester'] = $this->CurrentSemester_Model->getSemester();

        $this->load->view('student_regist', $data);
    }

    public function DeleteRegister(){
        $this->load->model('Student_Model');
        $Subject_id = $this->input->post('Subject_id');
        $Student_id = $this->session->userdata('user_id');
        $Semester_ID = $this->session->Semester_ID;

        $this->Student_Model->deleteRegister($Student_id, $Subject_id, $Semester_ID);
    }

    public function SaveRegister(){ 
        $this->load->model('student_Model');
        $this->load->model('Register_Model');
        $this->load->model('registerSubject_Model');
        $time = json_decode($this->input->post('time'));
        $Subject_id = $this->input->post('Subject_id');
        $Student_id = $this->session->userdata('user_id');
        $Semester_ID = $this->session->Semester_ID;

        $Student_grade = $this->input->post('Student_grade');
        $Student_email = $this->input->post('Student_email');
        $Student_tel = $this->input->post('Student_tel');
        
        $student = $this->student_Model->getStudentByID($Student_id);
        if(count($student) > 0){
            $student = $student[0];
            $student->Student_email = $Student_email;
            $student->Student_tel = $Student_tel;
            $this->student_Model->update($Student_id, $student);

            $data = array(
                'Student_id' => $Student_id,
                'Subject_id' => $Subject_id,
                'Semester_ID' => $Semester_ID,
                'Grade' => $Student_grade
            );
            $this->registerSubject_Model->save($data);
        }

        
        foreach($time as $day => $val)
        {
            foreach($val as $t => $isfree)
            {
                $p = explode('-',$t);
                $data = array(
                    'Student_id' => $Student_id,
                    'Subject_id' => $Subject_id,
                    'Semester_ID' => $Semester_ID,
                    'DayofWeek' => $day,
                    'Start' => $p[0],
                    'End' => $p[1],
                    'isFree' => ($isfree)? 1 : 0
                );
                $this->Register_Model->save($data);
            }
        }
        //$this->session->Subject_id = '';
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