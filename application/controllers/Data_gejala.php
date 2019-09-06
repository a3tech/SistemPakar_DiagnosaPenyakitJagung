<?php

class Data_gejala extends CI_Controller{

private $model = NULL;

		public function __construct(){
		parent::__construct();


		$this->load->library('pagination');
		$this->load->model('Gejala_model');
		$this->model = $this->Gejala_model;
	}

	public function index(){
		if(isset($_GET['tambah'])){
		$this->load->view('module/module_sp/view_tambah_gejala', ['model'=>$this->model]);
		} else {
		$this->select(); }
	}


	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->nama_gejala= $_POST['nama_gejala'];	
			$this->model->cf = $_POST['cf'];
			$this->model->insert();
			$this->session->set_flashdata('tambah', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Data Gejala Berhasil Ditambahkan !</strong></br>Berikut Semua Daftar Data Gejala yang Tersimpan
                      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
			redirect('data_gejala/index');
		} else {
			$this->load->view('module/module_sp/view_tambah_gejala', ['model'=>$this->model]);
		}
	}

	public function select(){
	if(isset($_POST['kunci'])){
	$kunci = $_POST['kunci'];
	$data['data'] = $this->model->searching($kunci);
	$this->load->view('module/module_sp/view_data_gejala', ['data'=>$data]);
	} else {
		$config['base_url'] = site_url('data_gejala/index'); //site url
        $config['total_rows'] = $this->db->count_all('gejala'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->model->select($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
	$this->load->view('module/module_sp/view_data_gejala', ['data'=>$data]); }
	}

	public function update(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id = $_POST['id_gejala'];
			$this->model->nama_gejala = $_POST['nama_gejala'];	
			$this->model->cf = $_POST['cf'];
			$this->model->update();
			$this->session->set_flashdata('ubah', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Data Gejala Berhasil Diubah !</strong>
                      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
			redirect('data_gejala/index');
		} else {
			$id_gejala = $_GET['id_gejala'];
			$query = $this->db->query("select * from gejala where id_gejala='$id_gejala'");
			$row = $query->row();
			$this->model->id = $row->id_gejala;
			$this->model->nama_gejala = $row->nama_gejala;
			$this->model->cf = $row->tingkat_kepercayaan;
			$this->load->view('module/module_sp/view_ubah_gejala',['model'=>$this->model]);
		}
	}

	public function delete(){
	$this->model->id = $_GET['id_gejala'];
	$this->model->delete();
	$this->session->set_flashdata('hapus', 
    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
     <strong>Data Gejala Berhasil Dhapus !</strong>
     <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button></div>');
	redirect('data_gejala/index');
	}
}