<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {
    function run_query(){
        return "Thank you for your visit!!";
    }

    function save_data($data){
        $this->db->insert("tbl_users",$data); //active code
        /*$this->db->query("Insert into tbl_users (name,email,phone_no) Values('Kwezi','kwezi@digilims.com','0671183913')"); //raw query*/
    }
}