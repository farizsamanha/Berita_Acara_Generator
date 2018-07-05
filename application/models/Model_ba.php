<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ba extends CI_Model {

	function tambah($table,$data) {
		$this->db->insert($table,$data);
	}

	function tambah2($table2,$data2) {
		$this->db->insert($table2,$data2);
	}

}

/* End of file model_ba.php */
/* Location: ./application/models/model_ba.php */