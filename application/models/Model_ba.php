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

	function insert2($insert_id,$nik,$nama,$jabatan,$keterangan){
		$data = array(
			'id_berita'=>$insert_id,
			'nik' => $nik,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'keterangan' => $keterangan
		);
		$this->db->replace('pegawai',$data);
	}

	function insert3($insert_id,$nik2,$nama,$jabatan2,$keterangan){
		$data = array(
			'id_berita'=>$insert_id,
			'nik' => $nik2,
			'nama' => $nama,
			'jabatan' => $jabatan2,
			'keterangan' => $keterangan,
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