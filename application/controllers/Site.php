<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('site/site_index');
		$this->load->view('include/footer');
	}

    public function about(){
		$this->load->view('include/header');
        $this->load->view('site/site_about');
		$this->load->view('include/footer');
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

	public function pass_var(){
		/*$info_array = array(
			"organisation" => "Epsitech",
			"author" => "Kwezi",
			"position" => "Software Developer Intern",
			"email" => "kwezi@digilims.epsi"
		);*/

		$info_array["organisation"] = "Epsitech";
		$info_array["author"] = "Kwezi";
		$info_array["position"] = "Software Developer Internh";
		$info_array["email"] = "kwezi@digilims.epsi";
		$this->load->view('include/header');
		$this->load->view('site/site_variable',array(
			"organisation" => "Epsitech",
			"author" => "Kwezi",
			"position" => "Software Developer Intern",
			"email" => "kwezi@digilims.epsi"
		));
		$this->load->view('include/footer');
	}
}
