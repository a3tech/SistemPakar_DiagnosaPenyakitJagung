<?php

class Profile_admin extends CI_Controller{
private $model = NULL;

		public function __construct(){
		parent::__construct();

		$this->load->model('Login1_model');
		$this->model = $this->Login1_model;
	}

	public function index(){
	if($this->session->has_userdata('user_admin')){

	$query1 = $this->db->query("select id_penyakit from penyakit");
	$rows1 = $query1->num_rows();
	$this->model->jumlah_penyakit = $rows1;

	$query2 = $this->db->query("select id_gejala from gejala");
	$rows2 = $query2->num_rows();
	$this->model->jumlah_gejala = $rows2;

	$query3 = $this->db->query("select distinct(id_penyakit) from pengetahuan");
	$rows3 = $query3->num_rows();
	$this->model->jumlah_pengetahuan = $rows3;

	$query4 = $this->db->query("select id_pengguna from pengguna");
	$rows4 = $query4->num_rows();
	$this->model->jumlah_pengguna = $rows4;

	$this->load->view('view_profile_admin1', ['model'=>$this->model,
										 	 'jumlah_penyakit'=>$this->model->jumlah_penyakit,
										 	 'jumlah_gejala'=>$this->model->jumlah_gejala,
										 	 'jumlah_pengetahuan'=>$this->model->jumlah_pengetahuan,
										 	 'jumlah_pengguna'=>$this->model->jumlah_pengguna]);	
	}else{
	$this->load->view('login1',
							  ['model'=>$this->model]);
		}
	}
}