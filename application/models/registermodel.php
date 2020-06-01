<?php
class registermodel extends CI_Model
{
    public function add_user($array)
    {
      return $this->db->insert('users',$array);
    }  
}