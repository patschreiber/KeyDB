<?php 
class Site extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->isLoggedIn();
	}
	
	function home() {
		$data['page'] = 'home';
		$this->load->view('templates/content', $data);
	}
	
	function isLoggedIn() {
		$isLoggedIn = $this->session->userdata('isLoggedIn');
	
		if(!isset($isLoggedIn) || $isLoggedIn != true) {
			$this->load->view('templayes/content', $data);
		}
	}
	
	
}
?>