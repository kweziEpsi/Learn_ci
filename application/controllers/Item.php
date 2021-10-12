<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
     }

    public function index()
    {
        $data['data'] = $this->Item_model->get_item();
 
        $this->load->view('include/header');       
        $this->load->view('item/index',$data);
        $this->load->view('include/footer');
    }

    public function create()
   {
      $this->load->view('include/header');
      $this->load->view('item/create');
      $this->load->view('include/footer');   
   }

   public function store(){
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('item/create'));
        }else{
        $this->Item_model->save_item();
        redirect(base_url('item/list'));
        }
   }

   public function show($id){
    $item = $this->Item_model->find_item($id);

    $this->load->view('include/header');
    $this->load->view('item/show',array('item'=>$item));
    $this->load->view('include/footer');
   }

   public function edit($id)
   {
       $item = $this->Item_model->find_item($id);

       $this->load->view('include/header');
       $this->load->view('item/edit',array('item'=>$item));
       $this->load->view('include/footer');
   }

   public function update($id)
   {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('item/edit/'.$id));
        }else{ 
          $this->Item_model->update_item($id);
          redirect(base_url('item'));
        }
   }
}
