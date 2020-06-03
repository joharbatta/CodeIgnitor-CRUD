<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		return redirect('Login');
	}
	public function index()
	{
		$this->load->model('loginmodel');
		$tasks=$this->loginmodel->tasklist();
		$this->load->view('Tasks/dashboard',['tasks'=>$tasks]);
    }

    public function logout()
	{
	  $this->session->unset_userdata('id');
	  return redirect('Login');
	}

	public function deletetask()
	{
		$task_id=$this->input->post('task_id');
		
		$this->load->model('taskmodel');
		if($this->taskmodel->deltask($task_id))
		{
			$this->session->set_flashdata('msg','Delete Successfully');
			$this->session->set_flashdata('msg_class','alert-success');
		}
		else
		{
		   $this->session->set_flashdata('msg','Please try again..not delete');
		   $this->session->set_flashdata('msg_class','alert-danger');
		}
		return redirect('Dashboard');
	}

	public function search()
	{

		$query = '';
		$this->load->model('taskmodel');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->taskmodel->search_data($query);
		// echo ($data);
		// echo '<pre>';
		// print_r($data);
		echo json_encode($data);
		
	}
    

}
