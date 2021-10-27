<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LearnershipType_model extends CI_Model {

    public function get_types($limit,$start){
        $this->db->limit($limit, $start);
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
          $this->db->or_like('credits', $this->input->get("search")); 
        }
        $query = $this->db->get('tbl_learnership_type');
        return $query->result();
    }

    /**
    * Start count items function.
    *
    */
   public function types_count(){
      $count = $this->db->count_all('tbl_learnership_type');
      return $count;
    }
    /**
     * End count types function.
     *
     */

     /**
    * Start save learnership type function.
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

  /**
  * Start find item function.
  *
  */
  public function find_type($id){
    return $this->db->get_where('tbl_learnership_type', array('id' => $id))->row(); //return data from learnership type table where 'id' = $id
  }
  /**
  * End find item function.
  *
 */

    /**
    * Start update learnership type function.
    *
   */
  public function update_type($id) 
  {
      $data=array(
          'name' => $this->input->post('name'), //get the title data input
          'credits'=> $this->input->post('credits') //get the description data input
      );
      if($id==0){ //check if $id == 0
          return $this->db->insert('tbl_learnership_type',$data); //insert data to items table and return data
      }else{
          $this->db->where('id',$id); //find data from items table where 'id' = $id
          return $this->db->update('tbl_learnership_type',$data); //update and return data 
      }  
  }
  /**
  * End update learnership type function.
  *
 */
}