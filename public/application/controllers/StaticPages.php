<?php
class StaticPages extends CI_Controller {
	
	public function view ($page = 'home') {
	
		if(!file_exists('application/views/' . $page . '.php')) {
			
			//No page exists, show 404
			show_404();
		}
		
		$data['title'] = ucfirst($page);	//Calitalizes the first letter

		$this->load->view('templates/header');
		$this->load->view($page, $data);
		$this->load->view('templates/footer');

	}
}

?>
