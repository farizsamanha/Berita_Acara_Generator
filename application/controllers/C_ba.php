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

		$this->Model_ba->tambah($table,$data);

		//print_r($data);
		//$this->index();
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */