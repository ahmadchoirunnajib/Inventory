<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_tambahkan extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
 
	function insertbarang() {
		$insert_barang = array(
		'kodeBarang' => $this->input->post('kodeBarang'),
		'namaBarang' => $this->input->post('namaBarang'),
		'hargaBarang' => $this->input->post('hargaBarang'),
		'jumlahBarang' => $this->input->post('jumlahBarang'),
		'deskripsiBarang' => $this->input->post('deskripsiBarang'),
		'gambarBarang' => $this->input->post('gambarBarang'),
		);

		$insert = $this->db->insert('tb_barang', $insert_barang);
		return $insert;
	}
}