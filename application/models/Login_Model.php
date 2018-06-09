<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

    public function checkUser($name, $password)
    {
        $this->db->where('User_name', $name);
        $this->db->where('User_password', $password);
        $user = $this->db->get('User');
       
        return  $user->result();
        
    }

}

/* End of file Login_Model.php */

?>