<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation'); 
     }

     public function signup(){
        $this->load->view('include/header');       
        $this->load->view('user/signUp',);
        $this->load->view('include/footer');
     }

     public function signin(){
        $this->load->view('include/header');       
        $this->load->view('user/signIn',);
        $this->load->view('include/footer');
      }

     public function register(){
        $this->form_validation->set_rules('user_name', 'User_name', 'required');
        $this->form_validation->set_rules('user_email', 'User_email', 'required','is_unique[user.email]');
        $this->form_validation->set_rules('user_password', 'User_password', 'required');
        $this->form_validation->set_rules('user_mobile', 'User_mobile', 'required','min_length[10]','max_length[11]');

        if ($this->form_validation->run() == FALSE){ //check if validation rules are false
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('user/signup'));
        }else{     
            if ($this->User_model->register())
               {
                  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
                  redirect(base_url('user/signin'));
               }
        }      
     }
     
     public function login(){
            $user=array(
               'user_email'=>$this->input->post('user_email'),
               'user_password'=>md5($this->input->post('user_password'))
            );

            $data=$this->User_model->login($user['user_email'],$user['user_password']);

            if($data)
            {
              $this->session->set_userdata('user_id',$data['user_id']);
              $this->session->set_userdata('user_email',$data['user_email']);
              $this->session->set_userdata('user_name',$data['user_name']);
              $this->session->set_userdata('user_mobile',$data['user_mobile']);
              redirect(base_url('user/profile'));
            }
            else{
              $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
              redirect(base_url('user/signin'));
            }
      } 
     

     public function profile(){
         $this->load->view('include/header');       
         $this->load->view('user/profile',);
         $this->load->view('include/footer');
      }

     public function logout(){
         $this->session->sess_destroy();
         redirect(base_url('user/signin'), 'refresh');
      }
}
