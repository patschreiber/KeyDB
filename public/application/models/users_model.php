<?php
class Users_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
	
	function LoginAuth () {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');
		
		if($query->num_rows == 1) {
			return true;
		}
	}
	
	function getUsers() {
		$query = $this->db->get('users');
		
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			echo 'Could not retrieve info from the database';
		}
	}
	
	function insertUser() {
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
	
	function deleteUser() {
		
	}
	
	function recoverPassword() {
		$this->db->where('email', $this->input->post('identification'));
		$this->db->or_where('username', $this->input->post('identification'));
		$query = $this->db->get('users');
		
		if($query->num_rows() == 1) {
			return $query->row_array();
		}
	}
	
	
}