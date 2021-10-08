<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index()
	{
		$this->load->view('site/site_index');
	}

    public function about(){
        $this->load->view('site/site_about');
    }

	public function contact_info(){
		echo "<h1>Welcome To CI Tutorial Contact Us Page</h1> <p>Written by:".$name."with id".$id."</p>";
	}

	public function service($id, $name){
		echo "<h1>Welcome To CI Tutorial Services Page</h1> <p>Written by : ".$name." with id : ".$id."</p>";
	}

	public function product($name){
		echo "<h1>Welcome To CI Tutorial Product Page</h1> <p>Available product : ".$name."</p>";
	}
}
