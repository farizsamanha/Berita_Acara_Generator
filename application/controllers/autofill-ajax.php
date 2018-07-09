<?php

$con = mysqli_connect("localhost","root","","berita_acara");

$nik = $_GET['nik'];
$return = mysqli_query($con, "SELECT * FROM pegawai WHERE nik = '$nik' LIMIT 1");
$rows = mysqli_fetch_array($return);
$getData = array(
	'nama' => $rows['nama'],
	'jabatan' => $rows['jabatan']
	);
/* End of file autofill-ajax.php */
/* Location: ./application/controllers/autofill-ajax.php */
?>