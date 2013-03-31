<?php

class Login extends CI_Controller {
	
	function index() {
		$data['page'] = 'login_form';
		$this->load->view('templates/content', $data); 
	}
	
	function validateLogin() {
		$this->load->library('form_validation');
		
		$this->load->model('users_model');
		$query = $this->users_model->LoginAuth();
			
		if($query == true) {
			$data = array (
				'username' => $this->input->post('username'),
				'isLoggedIn' => true
			);
				
			$this->session->set_userdata($data); //Adds $data to user session
			redirect('site/home'); //Site controller, home method
		}
		else {
			$data = array(
			 		'page' => 'login_form',
			 		'error' => 'Incorrect username or password.'
					);
		$this->load->view('templates/header'); 
		$this->load->view('login_form', $data); 
		$this->load->view('templates/footer'); 
		}
	}
	
	function createAccount() {
		$this->load->library('form_validation');
		//field name, error message, validation rules
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]'); //checks to see if valid email address
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[users.username]|alpha_num');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		if($this->form_validation->run() == false) {
			$this->index();
		}
		else {
			$this->load->model('users_model');
			
			if($query = $this->users_model->insertUser()) {
				$data['page'] = 'signup_successful';
				$this->load->view('templates/content', $data);
			}
			else {
				$this->load->view('login_form');
			}
		}
		
	}

}