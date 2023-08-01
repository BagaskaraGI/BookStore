<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_buku');
		$this->load->model('Model_penerbit');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Pages
	 *	- or -
	 * 		http://example.com/index.php/Pages/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Pages/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{   
        $data['title'] = "Home";
        $this->load->view('templates/header', $data);
		$this->load->view('home');
        $this->load->view('templates/footer');
	}
	public function daftarBuku()
	{   
		// $data['data_buku'] = $this->db->get('tb_buku')->result_array();
		$this->load->model('Model_buku');
		
		$data['data_buku'] = $this->Model_buku->get_all_buku() 	->result_array();
		$data['data_penerbit'] = $this->db->get('tb_penerbit')->result_array();
        $data['title'] = "Daftar Buku";
        $this->load->view('templates/header', $data);
		$this->load->view('daftarBuku');
		$this->load->view('templates/modal');
        $this->load->view('templates/footer');
	}
	public function daftarPenerbit()
	{   
		$data['data_penerbit'] = $this->db->get('tb_penerbit')->result_array();
        $data['title'] = "Daftar Penerbit";
        $this->load->view('templates/header', $data);
		$this->load->view('daftarPenerbit', $data);
		$this->load->view('templates/modalPenerbit');
        $this->load->view('templates/footer');
	}


	public function hapusBuku(){
		$this->load->model('Model_buku');
		$kode = $this->uri->segment(3);
		$this->Model_buku->hapus_buku($kode);
		$this->session->set_flashdata('pesan', '<div class= "alert alert-danger" role="alert"> Data Berhasil Di Hapus</div>');
		redirect('Pages/daftarBuku');
	}

	public function tambahBuku(){
		$data['title'] = "Tambah Buku";
		$data['url_action'] = base_url('Pages/simpanBuku');
		$this->load->view('templates/modal', $data);
	}

	public function simpanBuku(){
		$data = array(
			'judul_buku' => $this->input->post('InputJudulBuku'),
			'tahun_terbit' => $this->input->post('InputTahunTerbit'),
			'kode_penerbit' => $this->input->post('InputKodePenerbit')
		);
		$this->Model_buku->simpan_buku($data);
		$this->session->set_flashdata('pesan', '<div class= "alert alert-success" role="alert"> Data Berhasil Di Ditambahkan</div>');
		redirect('Pages/daftarBuku');

	}


	public function tampilEdit(){
		$data['title'] = "Edit Buku";
		$kode = $this->uri->segment(3);
		$data['data_penerbit'] = $this->db->get('tb_penerbit')->result_array();
		$data['data_buku'] = $this->Model_buku->get_one_buku($kode)->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/modalEdit', $data);
		$this->load->view('templates/footer');
	}

	public function editBuku($kode){
		$data = array(
			'judul_buku' => $this->input->post('EditJudulBuku'),
			'tahun_terbit' => $this->input->post('EditTahunTerbit'),
			'kode_penerbit' => $this->input->post('EditKodePenerbit')
		);
		$this->Model_buku->edit_buku($kode,$data);
		$this->session->set_flashdata('pesan', '<div class= "alert alert-success" role="alert"> Data Berhasil Di Diubah </div>');
		redirect('Pages/daftarBuku');
	}

	public function hapusPenerbit(){
		$kode = $this->uri->segment(3);
		$response = $this->Model_penerbit->hapus_penerbit($kode);

		if($response['result']){
			$this->session->set_flashdata('pesan', '<div class= "alert alert-success" role="alert">' . $response['message'] . '</div>');
		}else{
			$this->session->set_flashdata('pesan', '<div class= "alert alert-danger" role="alert">'. $response['message'] .' </div>');
		}
		redirect('Pages/daftarPenerbit');
	}


	public function simpanPenerbit(){
		$data = array(
			'nama_penerbit' => $this->input->post('InputNamaPenerbit'),
			'alamat_penerbit' => $this->input->post('InputAlamatPenerbit')
		);
		$this->Model_penerbit->simpan_penerbit($data);
		$this->session->set_flashdata('pesan', '<div class= "alert alert-success" role="alert"> Data Berhasil Di Ditambahkan</div>');
		redirect('Pages/daftarPenerbit');
	}


	public function tampilEditPenerbit(){
		$data['title'] = "Edit Penerbit";
		$kode = $this->uri->segment(3);
		$data['data_penerbit'] = $this->Model_penerbit->get_one_penerbit($kode)->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/modalEditPenerbit', $data);
		$this->load->view('templates/footer');
	}



	public function editPenerbit($kode){
		$data = array(
			'nama_penerbit' => $this->input->post('EditNamaPenerbit'),
			'alamat_penerbit' => $this->input->post('EditAlamatPenerbit')
		);
		$this->Model_penerbit->edit_penerbit($kode,$data);
		$this->session->set_flashdata('pesan', '<div class= "alert alert-success" role="alert"> Data Berhasil Di Diubah</div>');
		redirect('Pages/daftarPenerbit');
	}








}
