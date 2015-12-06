<?php
class Mtambah extends CI_Model {
    var $tabel = 'tb_barang'; //buat variabel tabel
    var $tabeltr = 'tb_transaksi'; //buat variabel transaksi

 
    function __construct() {
        parent::__construct();
    }

    //============================Barang============================//
     
    //fungsi untuk menampilkan semua data dari tabel database
    function get_allimage() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }

    

    function getProduct($id)
    {
        //select produk berdasarkan id yang dimiliki
    }

    function updateProduct($id)
    {
        //update produk berdasarkan id
    }

    function deleteProduct($id)
    {
        //delete produk berdasarkan id
    }

    //============================Transaksi============================//

    function get_inserttr($data){
       $this->db->insert($this->tabeltr, $data);
       return TRUE;
    }


}

