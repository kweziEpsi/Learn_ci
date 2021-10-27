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
        $config['base_url'] = 'http://localhost:8000/learnershiptype/list/';
        $config['total_rows'] = $this->LearnershipType_model->types_count();
        $config['per_page'] = 5;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
        $data['links'] = $this->pagination->create_links();

        $data['types'] = $this->LearnershipType_model->get_types($config["per_page"], $page);

        $this->load->view('include/header');       
        $this->load->view('learnership/type/index',$data);
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
        $this->load->view('learnership/type/create');
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

    /**
    * Start display single learnership type function.
    *
   */
   public function show($id){
    $type = $this->LearnershipType_model->find_type($id); //link to find learnership type function in model
    $this->load->view('include/header');
    $this->load->view('learnership/type/show',array('type'=>$type)); //display single learnership type on view
    $this->load->view('include/footer');
    }
    /**
    * End display single learnership type function.
    *
    */
}