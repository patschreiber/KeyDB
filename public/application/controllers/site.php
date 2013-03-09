<?php 
class Site extends CI_Controller {
	
	function home() {
		$data['page'] = 'home';
		$this->load->view('templates/content', $data);
	}
	
	
}
?>