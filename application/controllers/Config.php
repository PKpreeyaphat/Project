<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

    public function index()
    {
        $this->load->view('config_view');
    }

}

/* End of file Config.php */


?>