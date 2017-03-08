<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Home_view');
	}
	

	public function signin()
	{
		//$this->load->view('signin_view');
		//$username = $this->input->post('username'); //echo $username; echo '<br>';
		//$password = $this->input->post('password'); //echo $password; echo '<br>';
		
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == false) {
						
			$this->load->view('signin_view');
			
		} else {
						
			$username = $this->input->post('username'); echo $username; echo '<br>';
			$password = $this->input->post('password'); echo $password; echo '<br>';
			
			
			$this->load->model('Usermodel');
			$row = $this->users->resolve_user_login($usersname , $password);


		}
	}

}
