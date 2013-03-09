<?php
	class Users extends CI_Controller {
		
		public function __construct() {
			
			parent::__construct();
			$this->load->model('Users_model');
		}
		
		public function displayUsers() {
			
			$data['users'] = $this->Users_model->getUsers();
			$data['title'] = 'Users in database';
			
			$this->load->view('templates/header', $data);
			$this->load->view('users', $data);
			$this->load->view('templates/footer');
		}
	}
?>