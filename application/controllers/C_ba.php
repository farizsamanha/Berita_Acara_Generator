<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Spipu\Html2Pdf\Html2Pdf;

class C_ba extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_ba');
		$this->load->library('Dates');			
	}

	public function index(){
		$this->load->view('home_ba');
	}

	public function cetak(){
		$data['judul'] = 'Penyerahan Laptop Dell dari IT ke Fasup West';
		$data['tanggal'] = '22-12-2000';
		$data['lokasi'] = 'BSD City';
		$data['nama'] = 'Rony F Ruzain ';
		$data['nik'] = '81256';
		$data['jabatan'] = 'SPV IT Operation Support Jabotabek';
		$data['keterangan'] = 'Pihak 1';
		$data['nama2'] = 'Hasnawita ';
		$data['nik2'] = '71350';
		$data['jabatan2'] = 'Supervisor Facilities Support Western Jabotabek';
		$data['keterangan2'] = 'Pihak 2';
		$data['statement'] = 'Dengan ini menyatakan “ telah dilakukan pengeluaran 16 unit Laptop Dell dari lokasi Office Telkomsel BSD ke Fasup West an Hasnawita”. Unit tersebut dengan rincian sebagai berikut.';
		$data['lokasi_asal'] = 'BSD Siti';
		$data['lokasi_tujuan'] = 'Siti BSD';
		$this->load->view('cetak2', $data);
	}

	public function printpdf($hasil){
		//var_dump($query);
		$html2pdf = new Html2Pdf('P', 'A4', 'en');
		$html2pdf->pdf->SetMargins(20, 5, 20);
        //$hasil = file_get_contents(base_url('index.php/C_ba/printdata?'.$query));
        $html2pdf->pdf->SetMargins(20, 5, 20);
        $html2pdf->pdf->SetFont('Times', '', 10);
		$html2pdf->pdf->AddPage(); 
		$html2pdf->pdf->WriteHTML($hasil); 
		$html2pdf->pdf->lastPage();
		$html2pdf->output('my.pdf');
	}

	public function postdata(){
		$data = array();
		$data['judul'] = $this->input->post('judul');
		$data['tanggal'] = $this->input->post('tanggal');
		$data['lokasi'] = $this->input->post('lokasi');
		$data['nama'] = $this->input->post('nama');
		$data['nik'] = $this->input->post('nik');
		$data['jabatan'] = $this->input->post('jabatan');
		$data['keterangan'] = $this->input->post('keterangan1');
		$data['nama2'] = $this->input->post('nama2');
		$data['nik2'] = $this->input->post('nik2');
		$data['jabatan2'] = $this->input->post('jabatan2');
		$data['keterangan2'] = $this->input->post('keterangan2');
		$data['statement'] = $this->input->post('statement');
		$data['lokasi_asal'] = $this->input->post('lokasi_asal');
		$data['lokasi_tujuan'] = $this->input->post('lokasi_tujuan');

		

		$arr_sn_barang = $this->input->post("sn_barang");
	    $arr_tipe_barang = $this->input->post("tipe_barang");
	    $arr_tipe_keterangan = $this->input->post("keterangan_barang");

	    for($i=0;$i<count($arr_sn_barang);$i++){	    
	   		$data['isi'][] = array(
		   		'serial_number' => $arr_sn_barang[$i],
		   		'tipe' => $arr_tipe_barang[$i],
	    		'status' => $arr_tipe_keterangan[$i],	
	    		);    
	    }
	    return $this->load->view('cetak2',$data,true);
	}


		
	public function printdata(){
		var_dump($this->input->get());
		$data = array();
		$data['judul'] = $this->input->get('judul');
		$data['tanggal'] = $this->dates->change_format($this->input->get('tanggal'));
		$data['lokasi'] = $this->input->get('lokasi');
		$data['nama'] = $this->input->get('nama');
		$data['nik'] = $this->input->get('nik');
		$data['jabatan'] = $this->input->get('jabatan');
		$data['keterangan'] = $this->input->get('keterangan1');
		$data['nama2'] = $this->input->get('nama2');
		$data['nik2'] = $this->input->get('nik2');
		$data['jabatan2'] = $this->input->get('jabatan2');
		$data['keterangan2'] = $this->input->get('keterangan2');
		$data['statement'] = $this->input->get('statement');
		$data['lokasi_asal'] = $this->input->get('lokasi_asal');
		$data['lokasi_tujuan'] = $this->input->get('lokasi_tujuan');

		$arr_sn_barang = $this->input->get("sn_barang");
	    $arr_tipe_barang = $this->input->get("tipe_barang");
	    $arr_tipe_keterangan = $this->input->get("keterangan_barang");

	    for($i=0;$i<count($arr_sn_barang);$i++){	    
	   		$data[] = array(
		   		'serial_number' => $arr_sn_barang[$i],
		   		'tipe' => $arr_tipe_barang[$i],
	    		'status' => $arr_tipe_keterangan[$i],	
	    		);    
	    }
	    //print_r($arr_sn_barang);	
	    //$this->postdata();    	    
	    $this->load->view('cetak2',$data);
		$data['isi'] = $this->input->get('isi'); 
		   	    
	    //print_r($data['isi'][0]);

	}

	public function result(){
		$data = $this->postdata();	
		//$query = http_build_query($data);
		$this->printpdf($data);
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

