src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"
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

    $(document).ready(function(e){
      var html1 = '</ p><div><button type="button" class="btn btn-warning" id="btn-kurang" style="position:relative; margin-left:60%;">Hapus</button> <div id="barang-container"><div class="form-group" id="sn">  <label class="col-md-4 control-label">Serial Number</label>    <div class="col-md-4 inputGroupContainer">  <div class="input-group">  <input  name="id-barang" class="form-control"  type="text" id="child-input-sn">    </div>  </div></div> <div class="form-group" id="tipe">  <label class="col-md-4 control-label">Tipe</label>    <div class="col-md-4 inputGroupContainer">    <div class="input-group">  <input  name="tipe" class="form-control"  type="text" id="child-input-tipe">    </div>  </div></div>  <div class="form-group" id="keterangan">   <label class="col-md-4 control-label">Keterangan</label>    <div class="col-md-4 inputGroupContainer">  <div class="input-group">  <input  name="keterangan" class="form-control"  type="text" id="child-input-keterangan"> </div> </div> </div> </div>';

//<button type="button" class="btn btn-warning" id="btn-kurang">Hapus</button> 
      $("#btn-tambah").click(function(e){
          $("#barang-container").append(html1);
        });

      $("#barang-container").on("click","#btn-kurang",function(e){
        //alert();
        $(this).parent("div").remove();
      });
    });