<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Login extends CI_Controller {  
function __construct()  
{  
    parent::__construct();    
    $this->load->model('data_model');  
}  
public function index(){  
    $this->load->view('login_view');  
}  
public function check_login(){  
     
    $data['name']=htmlspecialchars($_POST['username']);  
    $data['password']=htmlspecialchars($_POST['password']);  
    $res=$this->data_model->islogin($data);  
    if($res){     
        $this->session->set_userdata('id',$data['name']);   
      echo base_url()."dashboard/";  
    }  
    else{  
       echo 0;  
    }   
}  
public function logout(){  
    $this->session->sess_destroy();  
    header('location:'.base_url()."login/".$this->index());  
      
}  
}  