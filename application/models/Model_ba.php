<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ba extends CI_Model {

	function insert($judul,$tanggal,$lokasi,$kategori,$statement){
		$data = array(
			'judul' => $judul,
			'tanggal' => $tanggal,
			'lokasi' => $lokasi,
			'kategori' => $kategori,
			'statement' => $statement,
		);
		$this->db->insert('berita',$data);
		return $this->db->insert_id();
	}

	function insert2($nik,$nama,$jabatan){
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'keterangan' => $keterangan
		);
		$this->db->replace('pegawai',$data);
	}

	function insert3($nik2,$nama,$jabatan2){
		$data = array(
			'nik' => $nik2,
			'nama' => $nama,
			'jabatan' => $jabatan2,
			'keterangan' => $keterangan2,
		);
		$this->db->replace('pegawai',$data);
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