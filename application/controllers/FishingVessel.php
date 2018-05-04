<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends CI_Controller {

    public function index()
    {
        $this->load->model('fishingvessel_model');
        $result = $this->fishingvessel_model->get_all();
       
        $data['vessels'] = $result;
        $data['title'] = "รายชื่อเรือประมงทั้งหมด";

        $this->load->view('header', $data);
        $this->load->view('fishing-vessel/index', $data);
        $this->load->view('footer');
    }

    public function all()
    {
        echo 'Show all vessels...';
    }

    public function new_vessel()
    {
        $this->load->model('country_model');
        $result = $this->country_model->get_all();
        $data['country_list'] = $result;
        $data['title'] = "เพิ่มข้อมูลเรือประมง";

        $this->load->view('header',$data);
        $this->load->view('fishing-vessel/new-ship', $data);
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