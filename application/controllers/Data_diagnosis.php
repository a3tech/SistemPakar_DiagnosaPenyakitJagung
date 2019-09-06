<?php

class Data_diagnosis extends CI_Controller{
private $model = NULL;
public $tmp_id;
public $row;
public $nilai_cf;
public $username;

		public function __construct(){
		parent::__construct();

		$this->load->library('pagination');
		$this->load->model('Diagnosis_model');
		$this->model = $this->Diagnosis_model;
		include_once 'laporan/fpdf.php';
	}

	public function index(){
		if(isset($_GET['tambah'])){
		$query = $this->db->query("select * from pengetahuan a join gejala b on a.id_gejala=b.id_gejala where a.id_gejala='G01'");
		$row = $query->row();
		$row1 = $row->nama_gejala;
	    $row2 = $row->id_gejala;
	    $kondisi = 1;
	$this->load->view('module/module_sp/view_tambah_diagnosis', ['model'=>$this->model,
																 'row1'=>$row1,
																 'row2'=>$row2,
																 'kondisi'=>$kondisi]);
		}elseif(isset($_GET['id_pengguna'])){
		$username = $_GET['id_pengguna'];
		$query1 = $this->db->query("select * from pengguna where username='$username'");
		$row1 = $query1->row();
		$this->model->id_penggunaa = $row1->id_pengguna;
		$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SISTEM PAKAR DIAGNOSA PENYAKIT TANAMAN JAGUNG',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'LAPORAN HASIL DIAGNOSA PENYAKIT TANAMAN JAGUNG',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetX(22);
        $pdf->Cell(20,6,'NOMOR',1,0,'C');
        $pdf->Cell(70,6,'NAMA PENYAKIT',1,0, 'C');
        $pdf->Cell(40,6,'FAKTOR KEPASTIAN',1,0, 'C');
        $pdf->Cell(40,6,'TANGGAL DIAGNOSA',1,1, 'C');
        $pdf->SetFont('Arial','',10);
		$this->cetak = $this->model->cetak_laporan();
		$cetak1 = $this->model->cetak_laporan();
		;
        for($i=0,$no=1;$i<$this->cetak->num_rows();$i++,$no++){
        	$pdf->SetX(22);
            $pdf->Cell(20,6,$no,1,0,'C');
            $pdf->Cell(70,6,$cetak1->row($i)->nama_penyakit,1,0,'C');
            $pdf->Cell(40,6,$cetak1->row($i)->tingkat_kepercayaan."%",1,0,'C');
            $pdf->Cell(40,6,$cetak1->row($i)->tanggal,1,1,'C'); 
        }
        $pdf->Output('Laporan_Hasil_Diagnosa', 'I');
		} else {
		$this->select(); }
	}

	public function create(){
		if(isset($_POST['btnSubmit'])){
		$kondisi=2;
		$jawaban = $_POST['jawaban'];
		$this->tmp_id = $_POST['id_gejala'];
	if($_POST['jawaban']==null && $_POST['cf']==null){
	$this->session->set_flashdata('tambah', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>ISIKAN JAWABAN ANDA WOEEEEE !</strong>
                      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
			redirect('data_diagnosis/index?tambah');
	}
	if($jawaban=='Ya' && $_POST['cf']==null){
	$this->session->set_flashdata('tambah', 
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>NILAI KEPASTIAN WAJIB DIISI WOEEEE !</strong>
                      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
			redirect('data_diagnosis/index?tambah');
	}
	if($jawaban=='Ya' && $_POST['cf']!=null){
	
	$nilai_cf=$_POST['cf'];
	$query5 = $this->db->query("select * from gejala where id_gejala='$this->tmp_id'");
	$row5 = $query5->row();
	$cf = $row5->tingkat_kepercayaan;
	$this->model->nilai_cf = $nilai_cf*$cf;
	$username = $this->session->userdata('user_pengguna');
	$query1 = $this->db->query("select * from pengguna where username='$username'");
		$row1 = $query1->row();
		$this->model->id_pengguna[0] = $row1->id_pengguna;
		$nama_pengguna = $row1->nama_pengguna;
		$email = $row1->email;
		$query = $this->db->query("select id_penyakit from pengetahuan where id_gejala='$this->tmp_id'");
		$this->model->baris = $query->num_rows();
		$query = $this->db->query("select * from pengetahuan where id_gejala='$this->tmp_id'");
		for($i=0;$i<$this->model->baris;$i++){
		$row = $query->row($i);
		$this->model->id_penyakit[$i] = $row->id_penyakit;
		$this->model->id_gejala[$i] = $row->id_gejala;
		}
		$this->model->status[0]=1;
		$this->model->insert_diagnosa();
		$this->model->insert_gejala();
		$this->model->insert_penyakit();


		if($this->model->rules_p1()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P01'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
		}elseif($this->model->rules_p2()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P02'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}elseif($this->model->rules_p3()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P03'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}elseif($this->model->rules_p4()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P04'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}elseif($this->model->rules_p5()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P05'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}elseif($this->model->rules_p6()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P06'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}elseif($this->model->rules_p7()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P07'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}elseif($this->model->rules_p8()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P08'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}elseif($this->model->rules_p9()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P09'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}elseif($this->model->rules_p10()==TRUE){
		$query = $this->db->query("select * from tmp_gejala a join pengetahuan b on a.id_gejala=b.id_gejala join penyakit c on c.id_penyakit=b.id_penyakit join pengguna d on d.id_pengguna=a.id_pengguna where b.id_penyakit='P10'");
		$row = $query->row();
		$query1 = $this->db->query("select min(cf) as min_cf from tmp_gejala");
		$row1 = $query1->row();
		$this->model->nilai_cf = ($row1->min_cf*$row->faktor_kepastian)*100;
		$this->nilai_cf = $this->model->nilai_cf;
		$email = $row->email;
		$nama_penyakit = $row->nama_penyakit;
		$definisi = $row->definisi;
		$solusi = $row->solusi;
		$foto1 = $row->foto1;
		$foto2 = $row->foto2;
		$foto3 = $row->foto3;
		$this->model->id1 = $row->id_penyakit;
		$this->model->id2 = $row->id_pengguna;
		$this->model->insert();
		$this->model->delete();
		

		
		$this->load->view('module/module_sp/view_hasil_diagnosis',['nama_pengguna'=>$nama_pengguna,
														'email'=>$email,
														'nama_penyakit'=>$nama_penyakit,
														'definisi'=>$definisi,
														'solusi'=>$solusi,
														'foto1'=>$foto1,
														'foto2'=>$foto2,
														'foto3'=>$foto3,
														'cf'=>$this->nilai_cf]);
}else{	
	   $query = $this->db->query("select * from gejala where jawaban_ya='$this->tmp_id'");
		$row = $query->row();
		$row1 = $row->nama_gejala;
		$this->tmp_id = $row->id_gejala;


	$this->load->view('module/module_sp/view_tambah_diagnosis',['kondisi'=>$kondisi,
																'row1'=>$row1,
																'id_gejala'=>$this->tmp_id]);
}
		}

		else{
		$query = $this->db->get('tmp_diagnosa');
		if($query->num_rows()!=null){
		$this->model->delete();
		}

		$query = $this->db->query("select * from gejala where id_gejala='$this->tmp_id'");
		$row = $query->row();
		$tampung = $row->jawaban_tidak;
		$query = $this->db->query("select * from gejala where id_gejala='$tampung'");
		$row = $query->row();
		$row1 = $row->nama_gejala;
		$this->tmp_id = $row->id_gejala;
$this->load->view('module/module_sp/view_tambah_diagnosis',['kondisi'=>$kondisi,
															'row1'=>$row1,
															'id_gejala'=>$this->tmp_id]);

		}
	
	
	 }else {
			$this->load->view('module/module_sp/view_tambah_penyakit', ['model'=>$this->model]);
		}


	}


	public function select(){
	if(isset($_POST['kunci'])){
	$kunci = $_POST['kunci'];
	$data['data'] = $this->model->searching($kunci);
	$this->load->view('module/module_sp/view_data_diagnosis', ['data'=>$data]);
	} else {
	
		$config['base_url'] = site_url('data_diagnosis/index'); //site url
        $config['total_rows'] = $this->model->tampil_diagnosis(); //total row
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
        $this->username = $this->session->userdata('user_pengguna');
		$this->load->view('module/module_sp/view_data_diagnosis', ['data'=>$data,
																   'username'=>$this->username]); }
	}

	public function detail(){
	$this->model->id = $_GET['id_konsultasi'];
	$this->model->detail();
	$this->row = $this->model->detail();
	$this->load->view('module/module_sp/view_detail_diagnosis', ['rows'=>$this->row]); 
	
	}

	public function delete(){
	$this->model->id = $_GET['id_konsultasi'];
	$this->model->delete1();
	$this->session->set_flashdata('hapus', 
    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
     <strong>Data Hasil Diagnosa yang dipilih Berhasil Dihapus !</strong>
     <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button></div>');
	redirect('data_diagnosis/index');
	}
}