<?php

class Login1_model extends CI_Model{
public $username;
public $password;
public $where = array();
public $jumlah_penyakit;
public $jumlah_gejala;
public $jumlah_pengetahuan;
public $jumlah_pengguna;

public function __construct(){
	parent::__construct();
	$this->load->database();
}

public function authentikasi_admin(){
	$this->where = array('username'=>$this->username, 'password'=>$this->password);
	$this->db->select('*')
			 ->from('admin')
			 ->where($this->where);
	$query = $this->db->get();
	return $query->result();
}

public function authentikasi_pengguna(){
	$this->where = array('username'=>$this->username, 'password'=>$this->password);
	$this->db->select('*')
			 ->from('pengguna')
			 ->where($this->where);
	$query = $this->db->get();
	return $query->result();
}

}