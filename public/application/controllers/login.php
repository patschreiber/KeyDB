<?php

class Login extends CI_Controller {
	
	function index() {
		$data['page'] = 'login_form'; //main-content dynamically loaded in content template using login_form view
		$this->load->view('templates/content', $data);
	}
	
	function validateLogin() {
		$this->load->model('Users_model');
		$query = $this->Users_model->LoginAuth();
		
		if($query == true) { //if true from model
			$data = array (
				'username' => $this->input->post('username'),
				'isLoggedIn' => true
			);
				
			$this->session->set_userdata($data); //Adds $data to user session
			redirect('site/home'); //Site controller, members area method
		}
		else {
			$this->index('');	//Load login form again
		}
	}
}

?>