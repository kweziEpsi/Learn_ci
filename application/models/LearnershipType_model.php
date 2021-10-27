<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LearnershipType_model extends CI_Model {

    public function get_types(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('credits', $this->input->get("search")); 
        }
        $query = $this->db->get("tbl_learnership_type");
        return $query->result();
    }

     /**
    * Start save items function.
    *
   */
  public function save_type()
  {    
      $data = array(
          'name' => $this->input->post('name'), //get name from input data
          'credits' => $this->input->post('credits') //get credits from input data
      );
      return $this->db->insert('tbl_learnership_type', $data); //insert into learnership type table and return data
  }
  /**
  * End save learnership type function.
  *
  */
}