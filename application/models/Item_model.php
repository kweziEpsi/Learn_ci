<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

    public function get_item(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("tbl_items");
        return $query->result();
    }

    public function save_item()
    {    
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('tbl_items', $data);
    }

    public function find_item($id){
      return $this->db->get_where('tbl_items', array('id' => $id))->row();
    }

    public function update_item($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('tbl_items',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('tbl_items',$data);
        }  
    }
    
    public function delete_item($id)
    {
        return $this->db->delete('tbl_items', array('id' => $id));
    }
    
}