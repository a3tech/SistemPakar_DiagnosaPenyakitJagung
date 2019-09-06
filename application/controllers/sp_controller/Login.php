<?php

class Login extends CI_Controller{

private $model = NULL;

		public function __construct(){
		parent::__construct();

		$this->load->model('Login1_model');
		$this->model = $this->Login1_model;
	}

	public function index(){
		if(isset($_POST['btnSubmit'])){
		$this->model->username = $_POST['username'];
		$this->model->password = $_POST['password'];
		if($this->model->authentikasi_admin()==TRUE){
		$this->session->set_userdata('user_admin',$this->model->username);

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
		}elseif($this->model->authentikasi_pengguna()==TRUE){
		$this->session->set_userdata('user_pengguna',$this->model->username);
		$this->load->view('view_profile_pengguna');	

		}else {
		$this->session->set_flashdata('gagal', 
   		 '<div class="alert alert-warning alert-dismissible fade show" role="alert">
   		 <strong>Username Atau Password yang Anda Masukan Salah !</strong>
   		 <button class="close" type="button" data-dismiss="alert" aria-label="Close">
   		 <span aria-hidden="true">×</span>
   		 </button></div>');
		redirect('sp_controller/login');}
		}elseif($this->session->has_userdata('user_admin')){

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
	}elseif($this->session->has_userdata('user_pengguna')){
	$this->load->view('view_profile_pengguna');	

	}else{
			$this->load->view('login1',
							  ['model'=>$this->model]);
		}
	}

	public function logout(){
		if($this->session->has_userdata('user_admin')){
			$this->session->sess_destroy();
			$this->load->view('login1',
							  ['model'=>$this->model]);
		} else {
			$this->session->sess_destroy();
			$this->load->view('login1',
							  ['model'=>$this->model]);
		}
	}


}