<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LearnershipSubType extends CI_Controller {

    public function __construct() {
        parent::__construct();  
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
     }

     public function index(){
        $data['subtypes'] = $this->LearnershipSubType_model->get_subs(); //link to get subtypes function from model
        $this->load->view('include/header');       
        $this->load->view('learnership/subtype/index',$data); //display view with list of subtypes
        $this->load->view('include/footer'); 
     }

     public function show($id){
        $data['type'] = $this->LearnershipSubType_model->get_type($id);
        $data['sub'] = $this->LearnershipSubType_model->get_sub($id); //link to find item function in model
        $this->load->view('include/header');
        $this->load->view('learnership/subtype/show',$data); //display single item on view
        $this->load->view('include/footer');
   }

}