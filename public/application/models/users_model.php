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
		
		$newUserInfo = array (
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'active' => true
		);
		
		$insert = $this->db->insert('users', $newUserInfo);
		return $insert;
	}
	
	public function deleteUser() {
		
	}
	
	
}

?>