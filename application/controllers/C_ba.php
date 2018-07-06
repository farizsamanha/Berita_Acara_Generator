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
        		<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<title>Berita Acara</title>
		<style type="text/css">
			body{
				margin: 20px 50px 10px 100px;
			}
			table, th, td{
				margin: 1px 1px 1px 1px;
				border-collapse: collapse;
			}
			td{
				padding: 20px;
			}
			.table2{
				border: 1px solid black;
				height: 20%;
			}
		</style>
	</head>
	<body>
		<table width="100%">
			<tr>
				<td align="center">Berita Acara</td>
			</tr>
			<tr>
				<td align="center">Penyerahan Laptop Dell dari IT ke Fasup West</td>
			</tr>
		</table>

		<table>
		<tr>
			<td>
				Pada hari ini, Rabu tanggal 31 bulan Januari tahun 2018, yang bertanda tangan dibawah ini :
			</td>
		</tr>
		</table>

		<table style="margin: 1px 1px 1px 1px;">
			<tr>
				<td style="font-weight: bold;">Pihak 1</td>
			</tr>
			<tr>
				<td>Nama : </td>
				<td>Rony F Ruzain</td>
			</tr>
			<tr>
				<td>NIK :</td>
				<td>81256</td>
			</tr>
			<tr>
				<td>Jabatan :</td>
				<td>SPV IT Operation Support Jabotabek</td>
			</tr>
			<tr>
				<td style="font-weight: bold;">Pihak 2</td>
			</tr>
			<tr>
				<td>Nama : </td>
				<td>Hasnawita</td>
			</tr>
			<tr>
				<td>NIK :</td>
				<td>81256</td>
			</tr>
			<tr>
				<td>Jabatan :</td>
				<td>Supervisor Facilities Support Western Jabotabek</td>
			</tr>

		</table>

		<table>
			<tr>
				<td>
					Dengan ini menyatakan “ telah dilakukan pengeluaran 16 unit Laptop Dell dari lokasi Office Telkomsel BSD ke Fasup West an Hasnawita”. Unit tersebut dengan rincian sebagai berikut.
				</td>
			</tr>
		</table>

		<table class="table2" align="center" >
			<tr class="table2">
				<th class="table2">
					No
				</th>
				<th class="table2">
					Type/Laptop
				</th>
				<th class="table2">
					Serial Number
				</th>
				<th class="table2">
					Status Instalasi Aplikasi
				</th>
			</tr>
			<tr class="table2">
				<td class="table2">
					1
				</td>
				<td class="table2">
					Lenovo
				</td>
				<td class="table2">
					827267282292872
				</td>
				<td class="table2">
					Done
				</td>
			</tr>
		</table>
		<br>
		<table align="right">
			<tr>
				<td>
					Tangerang, 31 Januari 2018
				</td>
			</tr>

		</table>
		<div class="w3-container">
			<br>
			<br>
			<table width="100%">
				<tr>
					<td style="font-size: 70%;">
						SPV IT Operation Support Jabotabek
					</td>
					<td style="font-size: 70%;">
						SPV Facilities Support Western Jabotabek
					</td>

				</tr>
			</table>
		</div>


		<br>
	</body>
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

