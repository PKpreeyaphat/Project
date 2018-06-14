<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ImportRoom extends CI_Controller
{
    private $comfirmData;

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
        $this->load->model('Room_Model');
        $data['room'] = $this->Room_Model->getAllRoom();
        $this->load->view('import_room', $data);
    }

    public function addRoom()
    {
        $data = array(
            'Room_name' => $this->input->post('Room_name')
        );

        $this->load->model('Room_Model');
        $this->Room_Model->insert($data);

        redirect('ImportRoom', 'refresh');
    }

    public function deleteRoom()
    {
        $this->load->model('Room_Model');
        $this->Room_Model->deleteRoom($this->input->post('Room_id'));

        redirect('ImportRoom', 'refresh');
    }

    public function upload_file()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['max_filename_increment'] = 1;
        $config['file_name'] = 'room_data';
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
                    $roomData = $this->csvreader->parse_file('./uploads/room_data.csv');

                    $this->load->model('Room_Model');

                    if (!isset($roomData[0]["Room_name"])) {
                        $json = array(
                            'status' => 1,
                            'msg' => "นำเข้าห้องปฏิบัติการไม่สำเร็จ กรุณาตรวจสอบไฟล์ CSV อีกครั้ง"
                        );
                    } else {
                        $json = array(
                            'status' => 2,
                            'msg' => "File successfully uploaded",
                            'data' => $roomData
                        );

                        $this->session->set_userdata('tmp_data', $roomData);
                    }
                }
            }
        } else {
            $json = array(
                'status' => 0,
                'msg' => "กรุณาเลือกไฟล์ CSV ที่ต้องการนำเข้า"
            );
        }
        echo json_encode($json);
    }

    public function confirmData()
    {
        $roomData = $this->session->userdata('tmp_data');

        $this->load->model('Room_Model');
        // $this->Room_Model->deleteAllRoom();
        // $this->Room_Model->resetAI();

        foreach ($roomData as $room) {
            if ($this->notInArray($room["Room_name"])) {
                $data = array(
                    'Room_name' => $room["Room_name"],
                );

                $this->Room_Model->insert($data);
            }
        }

        redirect('ImportRoom', 'refresh');
    }

    public function notInArray($roomName)
    {
        $this->load->model('Room_Model');
        $rooms = $this->Room_Model->getAllRoom();

        $bool = true;

        foreach ($rooms as $room) {
            if ($roomName == $room->Room_name) {
                $bool = false;
            }
        }

        return $bool;
    }

}

/* End of file ImportRoom.php */
