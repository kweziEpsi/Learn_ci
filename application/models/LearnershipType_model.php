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
}