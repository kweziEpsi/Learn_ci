<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {
    private $beta;

    public function __construct(){
        parent::__construct();
        $this->beta = $this->load->database('beta',TRUE);
    }
    function run_query(){
        return "Thank you for your visit!!";
    }

    function save_data($data){
        $this->db->insert("tbl_users",$data); //active code
        /*$this->db->query("Insert into tbl_users (name,email,phone_no) Values('Kwezi','kwezi@digilims.com','0671183913')"); //raw query*/
    }

    function save_book($data){
        $this->beta->insert("tbl_books",$data); //active code
        /*$this->db->query("Insert into tbl_users (name,email,phone_no) Values('Kwezi','kwezi@digilims.com','0671183913')"); //raw query*/
    }
}