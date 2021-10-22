<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
     }

    /**
    * Start list view function.
    *
   */
    public function index(){
        $config['base_url'] = 'http://localhost:8000/item/list/';
        $config['total_rows'] = $this->Item_model->items_count();;
        $config['per_page'] = 5;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
        $data['links'] = $this->pagination->create_links();

        $data['items'] = $this->Item_model->get_items($config["per_page"], $page); //link to get items function from model
        $this->load->view('include/header');       
        $this->load->view('item/index',$data); //display view with list of items
        $this->load->view('include/footer'); 
    }
    /**
    * End list view function.
    *
   */

    /**
    * Start create view function.
    *
   */
    public function create(){
        $this->load->view('include/header');
        $this->load->view('item/create');
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
        $this->form_validation->set_rules('title', 'Title', 'required'); //validate title
        $this->form_validation->set_rules('description', 'Description', 'required'); //validate description


        if ($this->form_validation->run() == FALSE){ //check if validation rules are false
            $this->session->set_flashdata('errors', validation_errors()); //error message
            redirect(base_url('item/create')); //redirect to create view 
        }else{
        $this->Item_model->save_item(); //link to save item function in model
        redirect(base_url('item/list')); //redirect to list view
        }
   }
   /**
    * End save to db function.
    *
   */

   /**
    * Start display single item function.
    *
   */
   public function show($id){
        $item = $this->Item_model->find_item($id); //link to find item function in model
        $this->load->view('include/header');
        $this->load->view('item/show',array('item'=>$item)); //display single item on view
        $this->load->view('include/footer');
   }
   /**
    * End display single item function.
    *
   */

   /**
    * Start edit Function.
    *
   */
   public function edit($id){
        $item = $this->Item_model->find_item($id); //Find item
        $this->load->view('include/header');
        $this->load->view('item/edit',array('item'=>$item)); //Display item to edit
        $this->load->view('include/footer');
   }
   /**
    * End edit Function.
    *
   */


   /**
    * Start Update Function.
    *
   */
   public function update($id)
   {
        $this->form_validation->set_rules('title', 'Title', 'required'); //validate title
        $this->form_validation->set_rules('description', 'Description', 'required'); //validate description


        if ($this->form_validation->run() == FALSE){ //check if validation rules are false
            $this->session->set_flashdata('errors', validation_errors()); //error message
            redirect(base_url('item/edit/'.$id)); //redirect to edit view
        }else{ 
          $this->Item_model->update_item($id); //link to update item function from model 
          redirect(base_url('item')); //redirect to list
        }
   }
   /**
    * End Update Function.
    *
   */


   /**
    * Start Delete Function.
    *
   */
   public function delete($id)
   {
       $item = $this->Item_model->delete_item($id); //link to delete item function from model
       redirect(base_url('item')); //redirect to list
   }
   /**
    * End Delete Data Function.
    *
   */
}
