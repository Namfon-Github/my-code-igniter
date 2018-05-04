<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->database();
    }

    public function get_all()
    {
        /* SELECT * form vessel */
        $query = $this->db->get('vessel');
        $result = $query->result_array();
        //var_dump($result);
        return $result;
    }
    
}

/* End of file FishingVessel_model.php */


?>
