<?php
class Password_recovery extends CI_Controller {
	
	function view() {
		$data['page'] = 'password_recovery';
		$this->load->view('templates/content', $data);
	}
	
	function identify() {
		$this->load->model('users_model');
		$query = $this->users_model->recoverPassword();
		
		$data['page'] = 'password_recovery';
		$data['pwRecoverUsername'] = $query['username'];
		$data['pwRecoverEmail'] = $query['email'];
		$this->load->view('templates/content', $data);
	}
}
