<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id'))
		return redirect('Dashboard');
	}
	public function index()
	{ 
        // $this->load->view('Tasks/register');
        $this->form_validation->set_rules('username','User Name','required|alpha');
        $this->form_validation->set_rules('password','Password','required|max_length[12]');
        $this->form_validation->set_rules('firstname','First Name','required|alpha');
        $this->form_validation->set_rules('lastname','last Name','required|alpha');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if($this->form_validation->run())
        {
            $post=$this->input->post(); 
            $this->load->model('registermodel','user');
            $this->user->add_user($post);
            // if($this->user->add_user($post))
            // {
            //    $this->session->set_flashdata('user','User added successfully');
            //    $this->session->set_flashdata('user_class','alert-success');
            // }
            // else
            // {
            //   $this->session->set_flashdata('user','User not added Please try again!!');
            //   $this->session->set_flashdata('user_class','alert-danger');
            // }
            return redirect('Login');
        }
        else
        {
         $this->load->view('Tasks/register');
        }
	}

}
