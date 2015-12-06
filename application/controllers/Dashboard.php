<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('autocompletemodel');
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->load->model('grocery_crud_model');
		$this->load->library('grocery_CRUD');
		$this->load->database();
		$this->load->helper('url');

		
	}
	function index()
	{
		$data['title'] = 'Dashboard - SI Indobayi'; //judul title
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');
		if($stat==1){//admin
			$this->load->view('admin/index',$data);
		}else{ //user
			$this->load->view('dashboard_user',$data);
		}
		
	}


	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}
	
    function barang() {
    	/*
    	$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);
		*/

		$crud = new grocery_CRUD();
		$crud->set_table('tb_barang');
		$crud->set_subject('Barang');
		$crud->columns('kodeBarang', 'namaBarang','hargaBarang','jumlahBarang','deskripsiBarang');
		$crud->set_theme('datatables');
		$crud->display_as('namaBarang','Nama Barang');
		$crud->display_as('kodeBarang','Kode');
		$crud->display_as('hargaBarang','Harga');
		$crud->display_as('jumlahBarang','Jumlah');
		$crud->display_as('deskripsiBarang','Deskripsi');
		$output = $crud->render();
		//$crud->columns('perihal','tanggal_surat_masuk');
		//$crud->display_as('id_persoalan','persoalan');
        //$crud->add_action('Setting', base_url().'assets/img/tick.png', 'perencanaan/setting','ui-icon-image');
		

		//$data['output'] = $output;
		/*$data = array(
			'user'  => $ambil_akun,
			'output' => $output
			);
			*/

		$stat = $this->session->userdata('lvl');
		if($stat==1){//admin
			$this->_example_output($output);
		}else{ //user
			$this->load->view('dashboard_user',$data);
		}	
    }

    function transaksi() {
    	

		$crud = new grocery_CRUD();
		$crud->set_table('tb_transaksi');
		$crud->set_subject('Transaksi');
		$crud->set_theme('datatables');
		$crud->display_as('tglTransaksi','Tgl');
		$crud->display_as('namaPembeli','Pembeli');
		$crud->display_as('namaPenerima','Penerima');
		$crud->display_as('no_hp','HP');
		$crud->display_as('jenisTransaksi','Transaksi');
		$crud->display_as('namaBarang', 'Barang');
		$crud->display_as('jumlahBarang','Jumlah');
		//$crud->columns('perihal','tanggal_surat_masuk');
		//$crud->display_as('id_persoalan','persoalan');
        //$crud->add_action('Setting', base_url().'assets/img/tick.png', 'perencanaan/setting','ui-icon-image');
		$output = $crud->render();

		$stat = $this->session->userdata('lvl');
		if($stat==1){//admin
			$this->_example_output($output);
		}else{ //user
			$this->load->view('dashboard_user',$data);
		}	
    }

	function login()
	{
		$session = $this->session->userdata('isLogin');
    	if($session == FALSE)
    	{
      		$this->load->view('login_form');
    	}else
    	{
      		redirect('dashboard');
    	}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}