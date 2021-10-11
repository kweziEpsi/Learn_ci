<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {


    public function index()
    {
        $data['data'] = $this->Item_model->get_item();
 
        $this->load->view('include/header');       
        $this->load->view('item/index',$data);
        $this->load->view('include/footer');
    }
}
