<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function register(){
        $user = array(
            'user_name'=>$this->input->post('user_name'),
            'user_email'=>$this->input->post('user_email'),
            'user_password'=>md5($this->input->post('user_password')),
            'user_mobile'=>$this->input->post('user_mobile')
              );

        return $this->db->insert('tbl_users', $user);        
    }

    public function login($email,$password){
        
        $query = $this->db->get_where('tbl_users', array('user_email' => $email,'user_password' => $password));

        if($query)
        {
            return $query->row_array();
        }
        else{
          return false;
        }             
    }
    
}