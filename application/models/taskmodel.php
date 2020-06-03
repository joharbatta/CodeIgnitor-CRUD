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

    function search_data($query)
    {
      $this->db->select("*");
      $this->db->from("tasks");
      if($query != '')
      {
        $this->db->like('task_title', $query);
        $this->db->or_like('task_body', $query);
      }
      $q=$this->db->get();
      return $q->result();
    }

}