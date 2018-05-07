<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FishingVessel extends CI_Controller
{

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

        $this->load->view('header', $data);
        $this->load->view('fishing-vessel/new-ship', $data);
        $this->load->view('footer');
    }

    public function create()
    {
        
        // เด๋วจะใส่ code uploadfile

        
        
        // การใช้ library เพื่อตรวจสอบความถูกต้องขอข้อมูล
        $this->load->library('form_validation');
        //เรียกใช้คำสั่งเพื่อตรวจสอบค่าของ textbox นั้นๆ ไม่ให้ว่าง ข้อความจะแสดงเตือนเป็นภาษาอังกฤษ
        //$this->form_validation->set_rules('vesselName', 'vesselName', 'required');
        //เรียกใช้คำสั่งเพื่อตรวจสอบค่าของ textbox นั้นๆ ไม่ให้ว่าง และกำหนดข้อความที่ใส่ไม่ให้เกิน 10 ตัวอักษร ข้อความจะแสดงเตือนเป็นภาษาไทย
        $this->form_validation->set_rules('vesselName', 'ชื่อเรือ', 'required|max_length[10]', array('required' => 'ช่วยกรอกชื่อสำเภาด้วยนะออเจ้า'));
       
        if ($this->form_validation->run() == false) {
            $this->load->model('country_model');
            $result = $this->country_model->get_all();
            $data['country_list'] = $result;
            $data['title'] = "เพิ่มข้อมูลเรือประมง";

            $this->load->view('header', $data);
            $this->load->view('fishing-vessel/new-ship', $data);
            $this->load->view('footer');
        } else {
            // เป็นคำสั่งเพื่อดูว่าข้อมูลได้ถูกส่งมารึเปล่า
            // var_dump($_POST);
            $this->load->model('fishingvessel_model');
            $this->fishingvessel_model->save_new_vessel();

            redirect('fishingvessel/');
        }
    }

    public function new_success()
    {
        $this->load->view('header');
        $this->load->view('');
        $this->load->view('footer');
    }

    public function delete_vessel()
    {
        //var_dump($_POST);
        $this->load->model('fishingvessel_model');
        $this->fishingvessel_model->delete_vessel();
        redirect('fishingvessel/');
    }
}

/* End of file FishingVessel.php */
