<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ba extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_ba');			
	}

	public function index(){
		$this->load->view('home_ba');
	}

	public function addBa(){
	    $data = array(
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'lokasi' => $this->input->post('lokasi'),
		);
		$table = 'berita';

		$data2 = array(
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'jabatan' => $this->input->post('jabatan'),
			'keterangan' => $this->input->post('keterangan1'),
		);

		$data3 = array(
			'nama' => $this->input->post('nama2'),
			'nik' => $this->input->post('nik2'),
			'jabatan' => $this->input->post('jabatan2'),
			'keterangan' => $this->input->post('keterangan2'),
		);

		$table2 = 'pegawai';

		$this->Model_ba->tambah($table,$data);
		$this->Model_ba->tambah2($table2,$data2);
		$this->Model_ba->tambah2($table2,$data3);

	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */