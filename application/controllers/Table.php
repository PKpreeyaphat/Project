<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

    public function index()
    {
    	$this->load->model("Table_Model");
    	$data['getRoom'] = $this->Table_Model->getRoom();
        $this->load->view('table_data',$data);
        
    }

    public function loadTable(){
    	//วันเวลาของแต่ละวิชาที่ใช้ห้องนี้
    	//รายชื่อนิสิต
    	
    	$RoomID = $this->input->post('Room_id');
    	$this->load->model('Table_Model');
    	$data['Room'] = $this->Table_Model->getRoomByID($RoomID);
    	if($data['Room'] != null){
    		$this->load->view("loadTable_View");	
    	}else{?>
    		<h3><center>ไม่มีข้อมูลห้องเรียน</center></h3>
<?php 	}    	
    }

}

/* End of file Page4.php */

//$this->load->view('page4_data');
?>

