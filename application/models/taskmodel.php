<?php
class taskmodel extends CI_Model
{
    public function add_task($array)
    {
      return $this->db->insert('tasks',$array);
    } 
    
    public function deltask($id)
    {
        return $this->db->delete('tasks',['id'=>$id]);
    }
}