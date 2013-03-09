<?php
class Signup extends CI_Controller {
	
	function index() {
		$data['view'] = 'signup_form';
		$this->load->view('templates/content', $data);
	}
}
?>