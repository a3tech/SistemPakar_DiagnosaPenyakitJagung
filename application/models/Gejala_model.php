<?php

class Gejala_model extends CI_Model{
public $id;
public $cf;
public $nama_gejala;

public function __construct(){
	parent::__construct();
	$this->load->database();
}


public function insert(){
	$query = $this->db->query("select max(id_gejala) as max_id from gejala");
	$rows = $query->row();
	$kode= $rows->max_id;
	$noUrut=(int)substr($kode, 1, 2);
	$noUrut++;
	$char="G";
	$kode=$char.sprintf("%02s", $noUrut);
	$data =[
	'id_gejala'=>$kode,
	'nama_gejala'=>$this->nama_gejala,
	'tingkat_kepercayaan'->$this->cf];
	$this->db->insert('gejala',$data);
	
}

public function update(){
	$data =[
	'nama_gejala'=>	$this->nama_gejala,
	'tingkat_kepercayaan' => $this->cf
	];
	$this->db->where('id_gejala',$this->id);
	$this->db->update('gejala',$data);
}

public function delete(){
	$array = array('pengetahuan','gejala');
	$this->db->where('id_gejala',$this->id);
	$this->db->delete($array);
}

public function select($limit, $start){
$this->db->select('*')
->from('gejala')
->limit($limit, $start);
$query = $this->db->get();
return $query;
}

public function searching($kunci){
$this->db->select('*')
->from('gejala')
->like('id_gejala', $kunci)
->or_like('nama_gejala', $kunci);
$query = $this->db->get();
return $query;
} 


}