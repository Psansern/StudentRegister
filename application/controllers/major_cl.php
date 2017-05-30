<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Major_Cl extends CI_Controller {

    /**
      ส่วนของcontroller  login ทำงานเป็นส่วนแรกของระบบในการตรวจสอบการทำงาน
      function indexเรียกหน้า login ใน front/login
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Fac_Model');
        $this->load->model('Major_Model');
    }

    public function index() {
      
       $this->get_major();
    }
    function get_major(){
     
        
          $data['rs']=$this->Major_Model->get_major(); 
       $this->load->view('front/get_major_view',$data);
   echo"daat". $data['std_id'];
      
      
    }
    function add_major(){
        //รับค่ามาจากวิว  add_major  
        $data=array(
            'major_id'=>$this->input->post('major_id'),
            'major_name'=>$this->input->post('major_name'),
            'fac_id'=>$this->input->post('fac_id'),
            'create_date'=> date('Y-m-d H:i:s')
        );
        if($this->Major_Model->add_major($data)){
            $this->load->view('admin/show_major');
        }
    }
            function edit_major(){
     $var['rs']=$this->Major_Model->get_major(); 
        $this->load->view('admin/Show_major',$var);
    }
}
 