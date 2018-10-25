<?php 

class User_model extends CI_model {

/*
public function get_users($user_id){

	$this->db->where([

	'id' => $user_id,
	'username' = $username
	]);

	$query = $this->db->get('users');

	return $query->result();
}

public function create_users($data){

	$this->db->insert('users', $data);

}


public function update_users($data, $id){

	$this->db->where(

	'id' => $id);
        
	$this->db->update('users', $data);

}

public function delete_users($data ,$id){

	$this->db->where(

	'id' => $id);

	$this->db->delete('users', $data);

}
*/

public function create_user() {

	$options = ['cost' => 12];

	$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

	$data = array(

		'first_name'     =>$this->input->post('first_name'),
		'last_name'      =>$this->input->post('last_name'),
		'email'          =>$this->input->post('email'),
		'name'           =>$this->input->post('username'),
		'password'       =>$encripted_pass

	);

	$insert_data = $this->db->insert('users', $data);

	return $insert_data;

}

public function login_user($username, $password) {

	$this->db->select();
	$this->db->from('users');
	$this->db->where('name', $username );
	$this->db->where('password', $password);

	$result = $this->db->get();


	if($result->num_rows() > 0){

		return $result->result_array()[0]['id'];
	
	} 
	 return false;

}

}

?>