<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Companies extends CI_Controller {  
function __construct()  
{  
    parent::__construct();    
    $this->load->model('companie_model');  
}  
public function index(){  
    $this->load->view('register_view');  
} 