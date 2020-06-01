<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddTask extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		return redirect('Login');
	}
	public function index()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger mb-2">', '</div>');
		if($this->form_validation->run('add_tasks_rules'))
		{
			$post=$this->input->post(); 

			$this->load->model('taskmodel');
			if($this->taskmodel->add_task($post))
			{
			   $this->session->set_flashdata('msg','Tasks added successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else
			{
			   $this->session->set_flashdata('msg','Tasks not added Please try again!!');
			   $this->session->set_flashdata('msg_class','alert-danger');
			}
			
			return redirect('Dashboard');
	  	}
		else
		{
		 $this->load->view('Tasks/addtask');
		}
    }

    

}
