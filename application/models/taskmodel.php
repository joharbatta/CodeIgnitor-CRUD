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

    public function find_task($taskid)
    {
     $q=$this->db->select(['task_title','task_body','id'])
              ->where('id',$taskid)
              ->get('tasks');
              return $q->row();
  
    }

    public function update_task($id,$task)
    {
      
     return $this->db->where('id',$id)
                     ->update('tasks',$task);
  
    }
}