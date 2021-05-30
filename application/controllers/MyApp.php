<?php
class  MyApp extends CI_controller
{
    public function index(){
        $this->load->model('UserDetail');
$detail=$this->UserDetail->getAllDetail();
$data=array();
$data['detail']=$detail;
$this->load->view('admin/blog/list',$data);

    }
   
} 
?>