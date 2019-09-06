<?php

class Data_pengguna extends CI_Controller{

private $model = NULL;

		public function __construct(){
		parent::__construct();

		$this->load->model('Pengguna_model');
		$this->model = $this->Pengguna_model;
	}

	public function index(){
		if(isset($_GET['tambah'])){
		$this->load->view('module/modul_sp/view_tambah_pengguna', ['model'=>$this->model]);
		} else {
		$this->select(); }
	}


	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->nama_pengguna = $_POST['nama_pengguna'];	
			$this->model->email = $_POST['email'];
			$this->model->username = $_POST['username'];
			$this->model->password= $_POST['password'];
			$this->model->insert();
			$this->session->set_flashdata('tambah', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Data Pengguna Berhasil Ditambahkan !</strong></br>Berikut Semua Daftar Data Pengguna yang Tersimpan
                      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
			redirect('sp_controller/data_penyakit/index');
		} else {
			$this->load->view('module/module_sp/view_tambah_penyakit', ['model'=>$this->model]);
		}

	}

	public function select(){
	if(isset($_POST['kunci'])){
	$kunci = $_POST['kunci'];
	$rows = $this->model->searching($kunci);
	$this->load->view('module/module_sp/view_data_pengguna', ['rows'=>$rows]);
	} else {
	$rows = $this->model->select();
	$this->load->view('module/module_sp/view_data_pengguna', ['rows'=>$rows]); }
	}

	public function update(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id = $_POST['id_pengguna'];
			$this->model->nama_pengguna = $_POST['nama_pengguna'];	
			$this->model->email = $_POST['email'];
			$this->model->username = $_POST['username'];
		    $this->model->password = $_POST['password'];
			$this->model->update();
			$this->session->set_flashdata('ubah', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Data Pengguna Berhasil Diubah !</strong>
                      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
			redirect('sp_controller/data_pengguna/index');
		} else {
			$id_pengguna = $_GET['id_pengguna'];
			$query = $this->db->query("select * from pengguna where id_pengguna='$id_pengguna'");
			$row = $query->row();
			$this->model->id = $row->id_pengguna;
			$this->model->nama_pengguna = $row->nama_pengguna;
			$this->model->email = $row->email;
			$this->model->username = $row->username;
			$this->model->password = $row->password;
			$this->load->view('module/module_sp/view_ubah_pengguna',['model'=>$this->model]);
		}
	}

	public function delete(){
	$this->model->id = $_GET['id_pengguna'];
	$this->model->delete();
	$this->session->set_flashdata('hapus', 
    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
     <strong>Data Pengguna Berhasil Dhapus !</strong>
     <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button></div>');
	redirect('sp_controller/data_pengguna/index');
	}
}