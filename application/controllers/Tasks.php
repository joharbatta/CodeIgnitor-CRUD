<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

	public function index()
	{
		// echo "TASKS";
		// $this->load->helper("url"); autoload
		$this->load->view('Tasks/TasksList');
	}
}
