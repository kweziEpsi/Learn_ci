<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
        parent::__construct(); 
        
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
     }

     public function signup(){
        $this->load->view('include/header');       
        $this->load->view('user/signUp',);
        $this->load->view('include/footer');
     }

     public function register(){
        $this->form_validation->set_rules('user_name', 'User_name', 'required');
        $this->form_validation->set_rules('user_email', 'User_email', 'required'|'is_unique[user.email]');
        $this->form_validation->set_rules('user_password', 'User_password', 'required');
        $this->form_validation->set_rules('user_mobile', 'User_mobile', 'required'|'min_length[10]'|'max_length[11]');

        if ($this->form_validation->run() == FALSE){ //check if validation rules are false
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('user/signup'));
        }else{
                $this->User_model->register();
                $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
                redirect(base_url('user/signin'));
        }      
     }	
}
