<?php

class Penyakit_model extends CI_Model{
public $id;
public $nama_penyakit;
public $definisi;
public $solusi;
public $cf;
public $gambar = array ();

public function __construct(){
	parent::__construct();
	$this->load->database();
}


public function insert(){
	$query = $this->db->query("select max(id_penyakit) as max_id from penyakit");
	$rows = $query->row();
	$kode= $rows->max_id;
	$noUrut=(int)substr($kode, 1, 2);
	$noUrut++;
	$char="P";
	$kode=$char.sprintf("%02s", $noUrut);
	$data =[
	'id_penyakit'=>$kode,
	'nama_penyakit'=>$this->nama_penyakit,
	'faktor_kepastian'=>$this->cf,
	'definisi' => $this->definisi,
	'solusi' =>$this->solusi,
	'foto1' => $this->gambar[0],
	'foto2' => $this->gambar[1],
	'foto3' => $this->gambar[2]];
	$this->db->insert('penyakit',$data);
	
}

public function update(){
	$data =[
	'nama_penyakit'=>$this->nama_penyakit,
	'definisi' => $this->definisi,
	'solusi'=> $this->solusi,
	'foto1' => $this->gambar[0],
	'foto2' => $this->gambar[1],
	'foto3' => $this->gambar[2]
	];
	$this->db->where('id_penyakit',$this->id);
	$this->db->update('penyakit',$data);
}

public function detail(){
$this->db->select('*')
		 ->from('penyakit')
		 ->where('id_penyakit=',$this->id);
$query = $this->db->get();
return $query->row();
}

public function delete(){
	$array = array('pengetahuan','penyakit');
	$this->db->where('id_penyakit',$this->id);
	$this->db->delete($array);
}

public function select(){
$query = $this->db->get('penyakit');
return $query->result();
}

public function searching($kunci){
$this->db->select('*')
->from('penyakit')
->like('id_penyakit', $kunci)
->or_like('nama_penyakit', $kunci);
$query = $this->db->get();
return $query->result();
} 


}