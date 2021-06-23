<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cari kendaraan yang tersimpan</h2>
  <form method="post">
    <div class="form-group">
      <label for="kendaraandicari">Ketik nama kendaraan dicari:</label>
      <input type="text" class="form-control" id="kendaraandicari" name="kendaraandicari" placeholder="Ketik nama kendaraan dicari ">
    </div>
    
    <button type="submit" class="btn btn-primary" name="bcari">Cari Barangnya</button>
  </form>
</div>
</body>
</html>
<?php if (isset($_POST['bcari'])) {
  $koneksi=new mysqli("localhost","root","","showroom");
  $kendaraandicari=$_POST['kendaraandicari'];
  if (empty($kendaraandicari)) {
    exit();
  }
$sql="SELECT * FROM `kendaraaan` WHERE `namakendaraan` LIKE '%".$kendaraandicari."%'";
$q=$koneksi->query($sql);
$rekordkendaraan=$q->fetch_array();
include("daftarkendaran.php");
} 

?>
