<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id'))
		return redirect('Dashboard');
	}
	public function index()
	{ 
		$this->form_validation->set_rules('uname','User Name','required|alpha');
		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
	    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run())
		{
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$login_id=$this->loginmodel->isvalidate($uname,$pass);
			if($login_id)
			{
				$this->session->set_userdata('id',$login_id);
			
				 return redirect('Dashboard');
		   	}
			else
			{
				echo "Not valid";
			}
			
		}
		 else
		 {
			$this->load->view('Tasks/login');
		 }
		 
	}

}
