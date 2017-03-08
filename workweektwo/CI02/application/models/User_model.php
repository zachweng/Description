<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	
	
	public function resolve_user_login($username, $password) {
		
		$query = $this->db->query('SELECT * FROM users where `username` = $username AND `password` = $password ;');

		/*
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$query = $this->db->get()->row('password');
		*/

		return $query->result();
		
	}
	
	
	
}

