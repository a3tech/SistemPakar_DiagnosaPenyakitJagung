<?php

class Pengguna_model extends CI_Model{
public $id;
public $nama_pengguna;
public $email;
public $username;
public $password;

public function __construct(){
	parent::__construct();
	$this->load->database();
}


public function insert(){
	$data =[
	'nama_pengguna'=>$this->nama_pengguna,
	'email' => $this->email,
	'username' =>$this->username,
	'password' =>$this->password];
	$this->db->insert('pengguna',$data);
	
}

public function update(){
	$sql = sprintf("update pengguna set nama_pengguna='%s', email='%s', username='%s',  	        password='%s' where id_pengguna='%s'",
					$this->nama_pengguna,
					$this->email,
					$this->username,
				    $this->password,
					$this->id);
	$this->db->query($sql);
}

public function delete(){  
	$array = array('hasil_diagnosa','pengguna');
	$this->db->where('id_pengguna', $this->id);
	$this->db->delete($array);
}

public function select(){
$query = $this->db->get('pengguna');
return $query->result();
}

public function searching($kunci){
$this->db->select('*')
->from('pengguna')
->like('id_pengguna', $kunci)
->or_like('nama_pengguna', $kunci);
$query = $this->db->get();
return $query->result();
} 


}