<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditTask extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		return redirect('Login');
	}
	public function index($id)
	{
        $this->load->model('taskmodel');
        $task=$this->taskmodel->find_task($id);
        // print_r($task);
        $this->load->view('Tasks/edittask',['task'=>$task]);	
    }
    public function updatetask($id)
    {
        if($this->form_validation->run('add_tasks_rules'))
        {
         $post=$this->input->post(); 
        //  print_r($post);
         $this->load->model('taskmodel');
         if($this->taskmodel->update_task($id,$post))
         {
            $this->session->set_flashdata('msg','Task Update successfully');
             $this->session->set_flashdata('msg_class','alert-success');
         }
         else
         {
            $this->session->set_flashdata('msg',' Please try again!!');
            $this->session->set_flashdata('msg_class','alert-danger');
         }
          return redirect('Dashboard');
        }

        else
        {
        $this->edituser($id);
        }

    }

    

}
