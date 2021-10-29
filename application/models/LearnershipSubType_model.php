<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LearnershipSubType_model extends CI_Model {
    /**
    * Start get types and sub types function.
    *
    */
    public function get_subs(){
        $this->db->select('*');
        $this->db->from('tbl_learnership_sub_type');//get subtypes db table
        $sub = $this->db->get();
        return $sub->result(); //return results
    }
    /**
    * End get types and sub types function.
    *
    */

    public function get_sub($id){
        $sub = $this->db->get_where('tbl_learnership_sub_type', array('id' => $id))->row(); 
        return $sub;//return results
    }

    public function get_type($id){
        $this->db->select('*')
        ->from('tbl_learnership_sub_type')
        ->join('tbl_learnership_type', 'tbl_learnership_type.id = tbl_learnership_sub_type.id')
        ->where('tbl_learnership_type.id' , $id);
        $type = $this->db->get()->row();
        return $type;//return results
    }
}