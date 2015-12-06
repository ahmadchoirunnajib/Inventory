<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class TambahkanData extends CI_Controller
{
    var $limit=10;
    var $offset=10;
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mtambah'); //load model mupload yang berada di folder model
        $this->load->helper(array('url')); //load helper url
        $this->load->library('form_validation');
 
    }

    public function tambahtransaksi() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('namaPembeli', 'Nama Pembeli', 'required');
        $this->form_validation->set_rules('namaPenerima', 'Nama Penerima', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Penerima', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('jenisTransaksi', 'Jenis Transaksi', 'required');
        $this->form_validation->set_rules('namaBarang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahBarang', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('total', 'Total', 'required');

        if ($this->form_validation->run() !== FALSE) {
            $hari = date('d/m/Y');
            $data = array(
                'tglTransaksi' => $hari,
                'namaPembeli' => $this->input->post('namaPembeli'),
                'namaPenerima' => $this->input->post('namaPenerima'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'jenisTransaksi' => $this->input->post('jenisTransaksi'),
                'namaBarang' => $this->input->post('namaBarang'),
                'jumlahBarang' => $this->input->post('jumlahBarang'),
                'total' => $this->input->post('total')
                 );

            $this->mtambah->get_inserttr($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil menambahkan transaksi dan mengupdate data!</div></div>");
            redirect('dashboard/tambahtransaksi'); 
        } else {
            //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal menambahkan transaksi dan mengupdate data!</div></div>");
            redirect('dashboard/tambahtransaksi'); 
        }
        
        

    }
 
    public function tambahbarang(){

        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);
         
        if($_FILES['gbrBarang']['name'])
        {
            if ($this->upload->do_upload('gbrBarang'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'kodeBarang' =>$this->input->post('kodeBarang'),
                  'namaBarang' =>$this->input->post('namaBarang'),
                  'hargaBarang' =>$this->input->post('hargaBarang'),
                  'jumlahBarang' =>$this->input->post('jumlahBarang'),
                  'deskripsiBarang' =>$this->input->post('deskripsiBarang'),
                  'gambarBarang' =>$gbr['file_name']
                  //'gambarBarang' =>$this->input->post('gbrBarang')
                   
                );
 
                $this->mtambah->get_insert($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil menambahkan data!</div></div>");
                redirect('dashboard/tambahbarang'); 
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal menambahkan data!</div></div>");
                redirect('dashboard/tambahbarang'); 
            }
        }
    }
}
 
/* End of file upload.php */
/* Location: ./application/controllers/upload.php */