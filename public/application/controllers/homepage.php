<?php
class Homepage extends CI_Controller {
	
	function index() {
		$data['page'] = 'homepage';
		$this->load->view('templates/content', $data);
		
	}
}

?>