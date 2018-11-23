<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function __construct() {
		/**
		Info: This Library was build to help us to make some simple crud
		Author : Hafizh
		**/

	}

	public function getAll($table) {
		return $this->db->get($table)->result();
	}


	public function getSemua($table, $kolom, $variabel) {
		return $this->db->where($kolom, $variabel)
		->get($table)->result();
	}

	public function getDataPeminjaman($table, $kolom, $variabel) {
		return $this->db->where($kolom, $variabel)
		->get($table)->result();
	}

	public function edit_data($table, $kolom, $id) {
		return $this->db->where($kolom, $id)
		->get($table)->result();
	}


	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	

	public function getN($table, $kolom, $variabel) {
		return $this->db->where($kolom, $variabel)
		->get($table)->result();
	}


	public function tambah($table,$data) {
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function update($variabel, $kolom,$table, $data) {
		$this->db->where($kolom,$variabel);
		$this->db->update($table,$data);
	}
	

}

?>