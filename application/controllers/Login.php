<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// echo "TASKS";
		// $this->load->helper("url"); autoload
		$this->load->view('Tasks/login');
	}

	public function xlogin()
	{
		$this->form_validation->set_rules('uname','User Name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
	    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run())
		{
			echo "Sucess";
		}
		 else
		 {
			$this->load->view('Tasks/login');
		 }
		 
	}
}
