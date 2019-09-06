<?php
class Segiempat_model extends CI_Model {
private $panjang;
private $lebar;

public function set_panjang($p){
	$this->panjang = $p;
}

public function get_panjang(){
	return $this->panjang;
}

public function set_lebar($l){
	$this->lebar = $l;
}

public function get_lebar(){
	return $this->lebar;
}

public function hitung_luas(){
	return $this->panjang * $this->lebar;
}

public function hitung_keliling(){
	return 2 * ($this->panjang + $this->lebar);
}

 
	}

