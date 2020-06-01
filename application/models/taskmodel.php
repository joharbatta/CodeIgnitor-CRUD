<?php
class taskmodel extends CI_Model
{
    public function add_task($array)
    {
      return $this->db->insert('tasks',$array);
    }  
}