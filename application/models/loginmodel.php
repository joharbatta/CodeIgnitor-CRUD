<?php
class loginmodel extends CI_Model
{
  public function isvalidate($username,$password)
  {
   $q=$this->db->where(['username'=>$username,'password'=>$password])
               ->get('users');
              
   //select * from users where username=$username and password=$password
        
           if($q->num_rows())     
           {
            return $q->row()->id;
           }   
           else
           {
           	return false;
           }
  }

  public function tasklist()
  {
    // $this->load->library('session');
    $id=$this->session->userdata('id');
    $q=$this->db->select('')
             ->from('tasks')
             ->where(['user_id'=>$id])
             ->get();
        return $q->result();     
  }

}