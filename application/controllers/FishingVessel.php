<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('fishing-vessel/index');
        $this->load->view('footer');
    }

    public function all()
    {
        echo 'Show all vessels...';
    }

    public function new()
    {
        $this->load->view('header');
        $this->load->view('fishing-vessel/new-ship');
        $this->load->view('footer');
    }

    public function new_success()
    {
        $this->load->view('header');
        $this->load->view('');
        $this->load->view('footer');
    }
}

/* End of file FishingVessel.php */



?>