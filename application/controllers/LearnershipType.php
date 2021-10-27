<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LearnershipType extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
     }

    public function index()
    {
        $data['data'] = $this->LearnershipType_model->get_types();

        $this->load->view('include/header');       
        $this->load->view('type/index',$data);
        $this->load->view('include/footer');
    }
}