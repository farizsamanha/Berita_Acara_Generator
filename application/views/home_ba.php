<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Berita Acara</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <script src="<?=base_url()?>assets/js/js.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

</head>


<body>
 <div class="container">
    <form class="well form-horizontal" action="<?php echo base_url().'index.php/c_ba/result'?>" method="post"  id="ba_form">
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
  <label class="col-md-4 control-label">NIK</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nik" class="form-control"  type="text" id="nik" onkeyup="autofill()">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nama" class="form-control"  type="text" id="nama" >
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Jabatan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="jabatan" class="form-control"  type="text" id="jabatan" >
    </div>
  </div>
</div>

<input  name="keterangan1" class="form-control" value="1" type="hidden">

<!-- ----------------------pihak 2---------------------------- -->

<div class="form-group">
  <label class="col-md-4 control-label">Pihak 2</label>  
 
</div>

<div class="form-group">
  <label class="col-md-4 control-label">NIK</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nik2" class="form-control"  type="text" id="nik2" onkeyup="autofill2()">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nama2" class="form-control"  type="text" id="nama2" >
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Jabatan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="jabatan2" class="form-control"  type="text" id="jabatan2" >
    </div>
  </div>
</div>

<input  name="keterangan2" class="form-control" value="2" type="hidden">

<div class="form-group"> 
  <label class="col-md-4 control-label">Statement</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
    <select name="statement" id="statement" class="form-control selectpicker" onchange="">
      <option value="1">Barang masuk</option>
      <option value="2">Barang keluar</option>
      <option value="3">Custom</option>
    </select>
  </div>
</div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label"></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <textarea  name="output" class="form-control" id="output" rows="4" cols="50" style="resize: none" ></textarea>
    </div> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <textarea  name="custom-area" class="form-control" id="custom-text-area" style="display: none;resize: none;"></textarea>
    </div> 
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Lokasi asal</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="lokasi_asal" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Lokasi tujuan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="lokasi_tujuan" class="form-control"  type="text">
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

<div id="barang-container">
<div class="form-group" id="sn">
  <label class="col-md-4 control-label">Serial Number</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="sn_barang[]" class="form-control"  type="text" id="input-sn">
    </div>
  </div>
</div>

<div class="form-group" id="tipe">
  <label class="col-md-4 control-label">Tipe</label>  
  <div class="col-md-4 inputGroupContainer">  
  <div class="input-group">
  <input  name="tipe_barang[]" class="form-control"  type="text" id="input-tipe">
    </div>
  </div>
</div>

<div class="form-group" id="keterangan">
  <label class="col-md-4 control-label">Keterangan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="keterangan_barang[]" class="form-control"  type="text" id="input-keterangan">
    </div>
  </div>
</div>
</div> 

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="button" class="btn btn-warning" id="btn-tambah">Tambah</button>
    <!--<button type="button" class="btn btn-warning" id="btn-kurang" onclick="kuran()">Kurang</button> -->
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Submit<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

<br>

</fieldset>
</form>
</div>

<script>
    function change(){
    var selectBox = document.getElementById("statement");
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var textarea = document.getElementById("custom-text-area");
    if(selected === 'custom'){
        textarea.style.display = "block";
    }
    else{
        textarea.style.display = "none";
    }
    }

    function change_output() {
      var pilihan = document.getElementById("statement");
      var terpilih = pilihan.options[pilihan.selectedIndex].value;
      var luaran = document.getElementById("output");
      if (terpilih === '1') {
        luaran.innerHTML = "Dengan ini menyatakan “ telah dilakukan pemasukan ---- dari ----- ke ----”. Unit tersebut dengan rincian sebagai berikut.";
        luaran.disabled= true;
      }
      else if (terpilih === '2') {
        luaran.innerHTML = "Dengan ini menyatakan “ telah dilakukan pengeluaran ---- dari ----- ke ----”. Unit tersebut dengan rincian sebagai berikut.";
        luaran.disabled= true;
      }
      else{
        luaran.innerHTML = "3";
        luaran.disabled= false;
      } 
    }

    function autofill() {
       var  nik = $("#nik").val();
       $.ajax({
          url: '<?php echo base_url().'autofill-ajax.php'?>',
          data: 'nik='+nik,
       }).success(function(data){        
          var json = data;
          obj = JSON.parse(data); 
          $("#nama").val(obj.nama);
          $("#jabatan").val(obj.jabatan);
       });
    }

    function autofill2() {
       var  nik = $("#nik2").val();
       $.ajax({
          url: '<?php echo base_url().'autofill-ajax.php'?>',
          data: 'nik='+nik,
       }).success(function(data){        
          var json = data;
          obj = JSON.parse(data); 
          $("#nama2").val(obj.nama);
          $("#jabatan2").val(obj.jabatan);
       });
    }


    $(document).ready(function(e){
      var html1 = '</ p><div><button type="button" class="btn btn-warning" id="btn-kurang" style="position:relative; margin-left:60%;">Hapus</button> <div id="barang-container"><div class="form-group" id="sn">  <label class="col-md-4 control-label">Serial Number</label>    <div class="col-md-4 inputGroupContainer">  <div class="input-group">  <input  name="sn_barang[]" class="form-control"  type="text" id="child-input-sn">    </div>  </div></div> <div class="form-group" id="tipe">  <label class="col-md-4 control-label">Tipe</label>    <div class="col-md-4 inputGroupContainer">    <div class="input-group">  <input  name="tipe_barang[]" class="form-control"  type="text" id="child-input-tipe">    </div>  </div></div>  <div class="form-group" id="keterangan">   <label class="col-md-4 control-label">Keterangan</label>    <div class="col-md-4 inputGroupContainer">  <div class="input-group">  <input  name="keterangan_barang[]" class="form-control"  type="text" id="child-input-keterangan"> </div> </div> </div> </div>';

      $("#btn-tambah").click(function(e){
          $("#barang-container").append(html1);
        });

      $("#barang-container").on("click","#btn-kurang",function(e){
        //alert();
        $(this).parent("div").remove();
      });

      $("#barang-container").on("dblclick", "#child-input-sn", function(e){
        $(this).val($("#input-sn").val());
      });

      $("#barang-container").on("dblclick", "#child-input-tipe", function(e){
        $(this).val($("#input-tipe").val());
      });

      $("#barang-container").on("dblclick", "#child-input-keterangan", function(e){
        $(this).val($("#input-keterangan").val());
      });
    });



</script>



</body>
</html>