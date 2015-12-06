<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Autocompletemodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getData($namaBarang)
    {
        $this->db->select('namaBarang');
        $this->db->like('namaBarang', $namaBarang);
           $query = $this->db->get('tb_barang');
        return $query->result();
    }
}