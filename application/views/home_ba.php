<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Berita Acara</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

 <!--<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">-->
</head>
<link rel="stylesheet" href='assets/css/style.css'>

<body>
 <div class="container">
    <form class="well form-horizontal" action="<?php echo base_url().'index.php/c_ba/addBa'?>" method="post"  id="ba_form">
    <fieldset>

<!-- Form Name -->
<h3 style="text-align: center;">Form Berita Acara</h3>
<br>

<div class="form-group">
  <label class="col-md-4 control-label">Judul Berita Acara</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="judul" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Tanggal</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="tanggal" class="form-control"  type="date">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Lokasi</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="lokasi" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Pihak 1</label>  
 
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nama" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">NIK</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nik" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Jabatan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="jabatan" class="form-control"  type="text">
    </div>
  </div>
</div>

<input  name="keterangan1" class="form-control" value="1" type="hidden">

<!-- ----------------------pihak 2---------------------------- -->

<div class="form-group">
  <label class="col-md-4 control-label">Pihak 2</label>  
 
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nama2" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">NIK</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nik2" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Jabatan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="jabatan2" class="form-control"  type="text">
    </div>
  </div>
</div>

<input  name="keterangan2" class="form-control" value="2" type="hidden">

<div class="form-group"> 
  <label class="col-md-4 control-label">Statement</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
    <select name="statement" class="form-control selectpicker" >
      <option value="masuk">Barang masuk</option>
      <option value="keluar">Barang keluar</option>
      <option value="custom">Custom</option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
      <textarea rows="4" cols="50">Input your text here...</textarea>
 </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Lokasi asal</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="lokasi-asal" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Lokasi tujuan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="lokasi-tujuan" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"><h4>Input Barang</h4></label>
  <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    </div>
  </div>
</div>

<div class="barang-container">
<div class="form-group">
  <label class="col-md-4 control-label">Serial Number</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="id-barang" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Tipe</label>  
  <div class="col-md-4 inputGroupContainer">  
  <div class="input-group">
  <input  name="tipe" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Keterangan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="keterangan" class="form-control"  type="text">
    </div>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="button" id="btn-tambah" onclick="tambah()">Tambah</button>
    <button type="button" id="btn-kurang" onclick="kurang()">Kurang</button>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Submit <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

<br>

</fieldset>
</form>
</div>

<script>
    function tambah() {
      alert("tambah");
    }

    function kurang() {
      alert("kurang");
    }
</script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

</body>
</html>