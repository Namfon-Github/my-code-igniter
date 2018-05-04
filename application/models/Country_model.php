<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Country_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('Country');
        return $query->result_array();
    }
    

}

/* End of file Country_model.php */

?>