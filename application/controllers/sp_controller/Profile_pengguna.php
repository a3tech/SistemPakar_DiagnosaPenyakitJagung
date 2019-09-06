<?php

class Profile_pengguna extends CI_Controller{
private $model = NULL;

		public function __construct(){
		parent::__construct();

		$this->load->model('Login1_model');
		$this->model = $this->Login1_model;
	}

	public function index(){
	if($this->session->has_userdata('user_pengguna')){

	$this->load->view('view_profile_pengguna');	
	}else{
	$this->load->view('login1',['model'=>$this->model]);
		}
	}
}