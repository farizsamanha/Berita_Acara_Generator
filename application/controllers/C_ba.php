<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Spipu\Html2Pdf\Html2Pdf;

class C_ba extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_ba');			
	}

	public function index(){
		$this->load->view('home_ba');
	}

	public function printhasil(){
		$html2pdf = new Html2Pdf('P', 'A4', 'en');
        $hasil = '
        	<page>
        		<div style="padding:4mm;" align="center">
        			<h3>Berita Acara</h3>
        		</div>
        	</page>
        ';
		$html2pdf->pdf->AddPage(); 
		$html2pdf->pdf->WriteHTML($hasil); 
		$html2pdf->output('my.pdf');
	}

	public function addBa(){
	    $table = 'berita';
	    $table2 = 'pegawai';
	    $table3 = 'barang';
	    $arr_sn_barang = $this->input->post("sn_barang");
	    $arr_tipe_barang = $this->input->post("tipe_barang");
	    $arr_tipe_keterangan = $this->input->post("keterangan_barang");
	    $data_insert = array();
	    

	    $data = array(
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'lokasi' => $this->input->post('lokasi'),
		);

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

    	
    	for($i=0;$i<count($arr_sn_barang);$i++){
	    	$data_insert[] = array(
	    		'serial_number' => $arr_sn_barang[$i],
	    		'tipe' => $arr_tipe_barang[$i],
	    		'status' => $arr_tipe_keterangan[$i],
	    	);
	    }


	

		$this->Model_ba->tambah($table,$data);
		$this->Model_ba->tambah2($table2,$data2);
		$this->Model_ba->tambah2($table2,$data3);
		$this->Model_ba->tambahtest($table3,$data_insert);
	}
}

