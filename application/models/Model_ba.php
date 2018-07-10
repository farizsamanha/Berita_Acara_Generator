<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ba extends CI_Model {

	function insert($judul,$tanggal,$lokasi){
		$data = array(
			'judul' => $judul,
			'tanggal' => $tanggal,
			'lokasi' => $lokasi,
		);
		$this->db->insert('berita',$data);
	}

	function insert2($nik,$nama,$jabatan){
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'jabatan' => $jabatan,
		);
		$this->db->insert('pegawai',$data);
	}

	function insert3($nik2,$nama,$jabatan2){
		$data = array(
			'nik' => $nik2,
			'nama' => $nama,
			'jabatan' => $jabatan2,
		);
		$this->db->insert('pegawai',$data);
	}
	
	function insert4($isi){
		$this->db->insert_batch('barang',$isi);
	}

	function getNik($value='')
	{
		$test = $this->db->get_where('pegawai', $where);
		return $test->result_array();
	}

}

/* End of file model_ba.php */
/* Location: ./application/models/model_ba.php */