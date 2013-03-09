<?php
class Users_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}
	
	public function LoginAuth () {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');
		
		if($query->num_rows == 1) {
			return true;
		}
	}
	
	public function getUsers() {
		$query = $this->db->get('users');
		
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			echo 'Users could not be pulled';
		}
	}
	
	public function insertUser() {
		
		$this->db->select('username');
		$query = $this->db->get_where('users', array('username' => $username));
		if($query->num_rows() <= 0) {
				
			echo '<div class= "warning">This Username is already taken</div>';
		}
		else {
			
		}
	}
	
	public function deleteUser() {
		
	}
	
	
}

?>