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

     /**
    * Start index view function.
    *
    */
    public function index()
    {
        $data['data'] = $this->LearnershipType_model->get_types();

        $this->load->view('include/header');       
        $this->load->view('type/index',$data);
        $this->load->view('include/footer');
    }
    /**
    * End index view function.
    *
    */

    /**
    * Start create view function.
    *
   */
    public function create(){
        $this->load->view('include/header');
        $this->load->view('type/create');
        $this->load->view('include/footer');  
    }
    /**
    * End create view function.
    *
    */
     /**
    * Start save to db function.
    *
    */
   public function store(){
        $this->form_validation->set_rules('name', 'Name', 'required'); //validate name
        $this->form_validation->set_rules('credits', 'Credits', 'required','min_length[10]','max_length[11]'); //validate credits


        if ($this->form_validation->run() == FALSE){ //check if validation rules are false
            $this->session->set_flashdata('errors', validation_errors()); //error message
            redirect(base_url('learnershiptype/create')); //redirect to create view 
        }else{
            $this->LearnershipType_model->save_type(); //link to save item function in model
            redirect(base_url('learnershiptype/list')); //redirect to list view
        }
    }
    /**
    * End save to db function.
    *
    */
}