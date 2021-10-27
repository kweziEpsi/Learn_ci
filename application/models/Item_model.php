<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {
    /**
    * Start get items function.
    *
   */
    public function get_items($limit,$start){
        $this->db->limit($limit, $start);
        if(!empty($this->input->get("search"))){ //check if input fields are not empty
          $this->db->like('title', $this->input->get("search")); //get the title
          $this->db->or_like('description', $this->input->get("search")); //get the description 
        }
        $query = $this->db->get("tbl_items"); //get items db table
        return $query->result(); //return results
    }
    /**
    * End get items function.
    *
   */
  /**
    * Start count items function.
    *
   */
   public function items_count(){
       $count = $this->db->count_all('tbl_items');

       return $count;
   }
    /**
    * Start count items function.
    *
   */
   /**
    * Start save items function.
    *
   */
    public function save_item()
    {    
        $data = array(
            'title' => $this->input->post('title'), //get title from input data
            'description' => $this->input->post('description') //get description from input data
        );
        return $this->db->insert('tbl_items', $data); //insert into items table and return data
    }
    /**
    * End save items function.
    *
   */

   /**
    * Start find item function.
    *
   */
    public function find_item($id){
      return $this->db->get_where('tbl_items', array('id' => $id))->row(); //return data from items table where 'id' = $id
    }
    /**
    * End find item function.
    *
   */

   /**
    * Start update item function.
    *
   */
    public function update_item($id) 
    {
        $data=array(
            'title' => $this->input->post('title'), //get the title data input
            'description'=> $this->input->post('description') //get the description data input
        );
        if($id==0){ //check if $id == 0
            return $this->db->insert('tbl_items',$data); //insert data to items table and return data
        }else{
            $this->db->where('id',$id); //find data from items table where 'id' = $id
            return $this->db->update('tbl_items',$data); //update and return data 
        }  
    }
    /**
    * End update item function.
    *
   */
    
   /**
    * Start delete item function.
    *
   */
    public function delete_item($id)
    {
        return $this->db->delete('tbl_items', array('id' => $id)); //find data from items table where 'id' = $id and delete item
        $this->db->alter('tbl_items');
        $this->db->truncate('tbl_items');
    }
    /**
    * End delete item function.
    *
   */
    
}