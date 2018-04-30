<?php

class User extends CI_Controller {
	function add(){
		echo $this->input->post("username");
	}
	function form(){
		$this->laod->view("from_user_v");
	}
	function index(){
		$this->load->view("welcome_message");	
	}
}