<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ImportStudent extends CI_Controller
{

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
        $this->load->model('Student_Model');
        $data['students'] = $this->Student_Model->getAllStudent();
        $this->load->view('import_student', $data);
    }

    // public function uploadFile()
    // {
    //     $config['upload_path'] = './uploads/';
    //     $config['allowed_types'] = '*';
    //     $config['overwrite'] = true;
    //     $config['max_filename_increment'] = 1;
    //     $config['file_name'] = 'student_data';
    //     $config['max_size'] = '2048';

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('excel_file')) {
    //         echo '<script>alert("นำเข้ารายชื่อนิสิตไม่สำเร็จ กรุณาลองใหม่อีกครั้ง");</script>';
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());

    //         $this->load->library('CSVReader');
    //         $studentData = $this->csvreader->parse_file('./uploads/student_data.csv');

    //         $this->load->model('Student_Model');

    //         if (!isset($studentData[0]["grade"])) {
    //             echo '<script>alert("นำเข้ารายชื่อนิสิตไม่สำเร็จ กรุณาตรวจสอบไฟล์ CSV อีกครั้ง");</script>';
    //             redirect('ImportStudent', 'refresh');
    //         }

    //         $this->Student_Model->deleteAllStudent();

    //         foreach ($studentData as $student) {

    //             $id = str_replace(" ", "", $student["ID"]);

    //             $pivotSpace = strpos($student["name"], " ", 0);
    //             $firstname = trim(substr($student["name"], 0, $pivotSpace));
    //             $lastname = trim(substr($student["name"], $pivotSpace));

    //             if ($this->notInArray($id)) {

    //                 $data = array(
    //                     'Student_id' => $id,
    //                     'Student_firstname' => $firstname,
    //                     'Student_lastname' => $lastname,
    //                     'Student_grade' => $student["grade"],
    //                 );

    //                 $this->Student_Model->insert($data);
    //             }
    //         }

    //         redirect('ImportStudent', 'refresh');
    //     }

    // }

    public function upload_file()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['max_filename_increment'] = 1;
        $config['file_name'] = 'student_data';
        $config['max_size'] = '2048';

        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    echo $this->upload->display_errors();
                } else {
                    $this->load->library('CSVReader');
                    $studentData = $this->csvreader->parse_file('./uploads/student_data.csv');

                    $this->load->model('Student_Model');

                    if (!isset($studentData[0]["name"])) {
                        $json = array(
                            'status' => 1,
                            'msg' => "นำเข้ารายชื่อนิสิตไม่สำเร็จ กรุณาตรวจสอบไฟล์ CSV อีกครั้ง",
                        );
                    } else {
                        $json = array(
                            'status' => 2,
                            'msg' => "File successfully uploaded",
                            'data' => $studentData,
                        );

                        $this->session->set_userdata('tmp_data', $studentData);
                    }
                }
            }
        } else {
            $json = array(
                'status' => 0,
                'msg' => "กรุณาเลือกไฟล์ CSV ที่ต้องการนำเข้า",
            );
        }
        echo json_encode($json);
    }

    public function confirmData()
    {
        $studentData = $this->session->userdata('tmp_data');

        $this->load->model('Student_Model');
        // $this->Student_Model->deleteAllStudent();

        foreach ($studentData as $student) {

            $id = str_replace(" ", "", $student["ID"]);
            
            $name = trim($student["name"]);
            
            $pivotSpace = strpos($name, " ", 0);
            if($pivotSpace != 0) {
                $firstname = trim(substr($name, 0, $pivotSpace));
                $lastname = trim(substr($name, $pivotSpace));
            } else {
                $pivotSpace2 = strpos($name, "  ", 0);
                $firstname = trim(substr($name, 0, $pivotSpace2));
                $lastname = trim(substr($name, $pivotSpace2));
            }
            

            if ($this->notInArray($id)) {

                $data = array(
                    'Student_id' => $id,
                    'Student_firstname' => $firstname,
                    'Student_lastname' => $lastname
                );
                
                $this->Student_Model->insert($data);
            }
        }

        redirect('ImportStudent', 'refresh');
    }

    public function notInArray($studentID)
    {
        $this->load->model('Student_Model');
        $students = $this->Student_Model->getAllStudent();

        $bool = true;

        foreach ($students as $student) {
            if ($studentID == $student->ID) {
                $bool = false;
            }
        }

        return $bool;
    }

}

/* End of file ImportStudent.php */
