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
		$message = $this->Site_model->run_query();
		$info_array = array(
			"organisation" => "Epsitech",
			"author" => "Kwezi",
			"position" => "Software Developer Intern",
			"email" => "kwezi@digilims.epsi",
			"message" => $message
		);

		/*$info_array["organisation"] = "Epsitech";
		$info_array["author"] = "Kwezi";
		$info_array["position"] = "Software Developer Internh";
		$info_array["email"] = "kwezi@digilims.epsi";*/

		 

		$this->load->view('include/header');
		$this->load->view('site/site_variable',$info_array);
		$this->load->view('include/footer');
	}

	public function register(){
		$data = array(
			"name" => "kwezi reen",
			"email" => "reen@digilims.com",
			"phone_no" => "067 118 555"
		);
		$this->Site_model->save_data($data);
	}

	public function add_book(){
		$data = array(
			"name" => "Morbi non arcu risus quis",
			"description" => "Morbi non arcu risus quis varius quam. Nec tincidunt praesent semper feugiat nibh sed pulvinar. Scelerisque eu ultrices vitae auctor eu augue ut lectus arcu. Facilisi morbi tempus iaculis urna id volutpat lacus laoreet non. In est ante in nibh mauris cursus. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Etiam dignissim diam quis enim lobortis scelerisque. Faucibus purus in massa tempor. Consequat id porta nibh venenatis cras sed felis eget velit. Ut aliquam purus sit amet luctus. Ut eu sem integer vitae justo eget magna. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Placerat vestibulum lectus mauris ultrices. Adipiscing commodo elit at imperdiet.",
			"author" => "Zela Reen"
		);
		$this->Site_model->save_book($data);
	}
}
