<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Companies extends CI_Controller {  

	function construct(){

	parent::__construct();    
    $this->load->model('Company_model'); 

}

	public function index(){  

    $this->load->view('companies/register_view');  
} 

	public function register(){

		$this->form_validation->set_rules(
			'cnpj', 'CNPJ', 
			'trim|required|exact_length[14]|alpha_numeric');
		$this->form_validation->set_rules(
			'fantasy_name', 'Name', 
			'trim|required|min_length[2]|alpha');
		$this->form_validation->set_rules(
			'email', 'Email', 
			'trim|required|max_length[360]|valid_email');
        $this->form_validation->set_rules(
			'phone', 'Phone', 
			'trim|required|min_length[4]');
		$this->form_validation->set_rules(
			'cep', 'CEP', 
			'trim|required|min_length[8]|numeric');
		$this->form_validation->set_rules(
			'street', 'Street', 
			'trim|required|min_length[6]');
		$this->form_validation->set_rules(
			'complement', 'Complement', 
			'trim|required|max_length[25]');
		$this->form_validation->set_rules(
			'number', 'Number', 
			'trim|required|numeric');
		$this->form_validation->set_rules(
			'neigborhood', 'Neigborhood', 
			'trim|required|alpha');
		$this->form_validation->set_rules(
			'city', 'City', 
			'trim|required|alpha');
		$this->form_validation->set_rules(
			'state', 'State', 
			'trim|required|alpha');

		if($this->form_validation->run() == FALSE) {

	       $this->load->view('users/principal_view');
			
		} else {

			$this->load->model('Company_model');

			if($this->Company_model->create_company()){
				
			echo 'Company has been registered';

			redirect('home/index');

			}

		}

	}


}

?>