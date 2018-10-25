<?php 

class Companie_model extends CI_model {


public function create_company() {

	$data = array(

		'cnpj'               =>$this->input->post('cnpj'),
		'fantasy_name'       =>$this->input->post('fantasy_name'),
		'email'              =>$this->input->post('email'),
		'phone'              =>$this->input->post('phone'),
		'cep'                =>$this->input->post('cep'),
		'street'             =>$this->input->post('street'),
		'complement'         =>$this->input->post('complement'),
		'number'             =>$this->input->post('number'),
		'neighborhood'       =>$this->input->post('neighborhood'),
		'city'               =>$this->input->post('city'),
		'state'              =>$this->input->post('state')

	);

	$insert_data = $this->db->insert('companies', $data);

	return $insert_data;

}
