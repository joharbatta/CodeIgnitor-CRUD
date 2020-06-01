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

	// public function addtask()
	// {
	// 	$this->load->view('Tasks/addtask');
	// }
    

}
