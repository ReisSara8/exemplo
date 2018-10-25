<?php 

class Users extends CI_Controller {

/*
	public function show($user_id) {

	$data[results] = $this->User_model->get_users($user_id, 'suave');

	$this->load->view('user_view', $data);

}

	public function insert() {

		$username = "peter";
		$password = "secret";

		$this->User_model->create_users([

			'username' => $username,
			'password' => $password

		])

	}

	public function update() {

		$id = 3;

		$username = "William";
		$password = "not so secret";

		$this->User_model->update_users([

			'username' => $username,
			'password' => $password

		], $id)

	}

	public function delete() {

		$id = 3;

		$this->User_model->delete_users($id);

	}

*/

	public function register(){

        $this->form_validation->set_rules(
			'first_name', 'First Name', 
			'trim|required|min_length[3]');
		$this->form_validation->set_rules(
			'last_name', 'Last Name', 
			'trim|required|min_length[4]');
		$this->form_validation->set_rules(
			'email', 'Email', 
			'trim|required|min_length[10]|valid_email');
        $this->form_validation->set_rules(
			'username', 'Username', 
			'trim|required|min_length[4]|is_unique[users.name]');
		$this->form_validation->set_rules(
			'password', 'Password', 
			'trim|required|min_length[4]is_unique[users.password]');
		$this->form_validation->set_rules(
			'confirm_password', 'Confirm Password', 
			'trim|required|min_length[4]|matches[password]');

		if($this->form_validation->run() == FALSE) {

		$data['main_view'] = 'users/register_view';

		$this->load->view('layout/main', $data);
			
		} else {

			$this->load->model('User_model');

			if($this->User_model->create_user()){
				
			$this->session->set_flashdata('user_registered', 'User has been registered');
			redirect('home/index');

			}

		}

	}

	public function login() {

	/*	$this->form_validation->set_rules(
			'username', 'Username', 
			'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 
			'trim|required|min_length[4]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 
			'trim|required|min_length[4]|matches[password]');

		if($this->form_validation->run() == FALSE) {

			$data = array(

				'errors' => validation_errors()
			);

			$this->session->set_flashdata($data);

			redirect('home/index');

		} else {*/

	    $username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('User_model');

		$user_id = $this->User_model->login_user($username, $password);

		if($user_id) {

			$user_data = array(

				'user_id' => $user_id,
				'name' => $username,
			    'logged_in' => true );

		$this->session->set_userdata($user_data);

		$this->session->set_flashdata('login_success', 'You are now logged in!');

	    $this->load->view('users/principal_view');

		} else {

			$this->session->set_flashdata('login_failed', 'Sorry, you are not now logged in!');
			redirect('home/index');

		}

	}
	public function logout(){

		$this->session->sess_destroy();

		redirect('home/index');

	}

}

?>