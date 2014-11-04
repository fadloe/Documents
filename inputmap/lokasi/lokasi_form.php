<?
$aksi='tambah';
?>
<link rel="stylesheet" href="css/peta.css">
<div class='row'>
	<div class="span8">
	

	<div id="map"></div>
	
</div> <!--end -f span-->
<div class="span8 ">
<form   method="POST" id="form1" action="lokasi/lokasi_action.php" class='form-horizontal'>
 <legend>  lokasi</legend>


	 <div class="control-group">
    <label class="control-label" for="nama">Nama Lokasi</label>
    <div class="controls">
      <input type="text" name='nama' class='input-xlarge'>
    </div>
  </div>	
  <div class="control-group">
    <label class="control-label" for="lat">latitude</label>
    <div class="controls">
      <input type="text" name='lat' id='lat' class='input-xlarge' >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="lng">Longitude</label>
    <div class="controls">
      <input type="text" name='lng' id='lng' class='input-xlarge'>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success" name='aksi'value=<?=$aksi?> ><?=$aksi?></button>
    </div>
  </div>
  </form>
</div>
  </div>
<?php
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Tambah Lokasi berhasil";
	} else {
		echo "Tambah Lokasi  gagal";
	}
}
?>
<script src="js/lokasi.js"></script>



