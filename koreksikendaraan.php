<!DOCTYPE html>
<html lang="en">
<head>
  <title>Koreksi Rekord Kendaraan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Koreksi Rekord Kendaraan</h2>
  <form method="post">
    <div class="form-group">
      <label for="namadikoreksi">Ketik nama kendaraan yang dikoreksi:</label>
      <input type="text" class="form-control" id="namadikoreksi" placeholder="Ketik nama kendaraan yang akan dikoreksi" name="namadikoreksi">
    </div>
      <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dikoreksi ?')">Koreksi</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
  $namadikoreksi=$_POST['namadikoreksi'];
  $koneksi=new mysqli("localhost","root","","showroom");
  $sql="SELECT * FROM kendaraaan WHERE namakendaraan = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Koreksi Pengguna</h2>
  <form method="post">
    <div class="form-group">
      <label for="nomormesin">Nomor Mesin Kendaraan:</label>
      <input type="text" class="form-control" id="nomormesin" placeholder="Enter nomor mesin" name="nomormesin" value="<?php echo $rekord['nomormesin'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="nomorrangka">Nomor Rangka Kendaraan:</label>
      <input type="text" class="form-control" id="nomorrangka" placeholder="Enter nomor rangka" name="nomorrangka" value="<?php echo $rekord['nomorrangka'];?>">
    </div>
    <div class="form-group">
      <label for="jeniskendaraan">Jenis kendaraan:</label>
      <input type="jeniskendaraan" class="form-control" id="jeniskendaraan" placeholder="Enter jenis kendaraan" name="jeniskendaraan"
    value="<?php echo $rekord['jeniskendaraan'];?>">
    
    </div>
    <div class="form-group">
     <label for="namakendaraan">Nama Kendaraan:</label>
     <input type="text" rows="5" id="namakendaraan" name="namakendaraan"value="<?php echo $rekord['namakendaraan'];?>">
   </div>
   <div class="form-group">
      <label for="tanggalbuat">Tanggal buat:</label>
      <input type="date" class="form-control" id="tanggalbuat" name="tanggalbuat" value="<?php echo $rekord['tanggalbuat'];?>">
    </div>
<div class="form-group">
      <label for="catatankendaraan">Catatan Kendaraan:</label>
      <input type="text" class="form-control" id="catatankendaraan" name="catatankendaraan" value="<?php echo $rekord['catatankendaraan'];?>">
    </div>
    <div class="form-group">
      <label for="nobpkb">Nomor BPKB:</label>
      <input type="text" class="form-control" id="nobpkb" placeholder="Enter nomor BPKB" name="nobpkb" value="<?php echo $rekord['nobpkb'];?>">
    </div>
    <div class="form-group">
      <label for="nostnk">Nomor STNK:</label>
      <input type="text" class="form-control" id="nostnk" placeholder="Enter nomor STNK" name="nostnk" value="<?php echo $rekord['nostnk'];?>">
    </div>
    </div>
    <div class="form-group">
      <label for="statusstnk">Nomor STNK:</label>
      <input type="text" class="form-control" id="statusstnk"name="statusstnk" value="<?php echo $rekord['statusstnk'];?>">
    </div>

    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan Rekord Pengguna</button>
  </form>
</div>    
    
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $nomormesin=$_POST['nomormesin'];
  $nomorrangka=$_POST['nomorrangka'];
  $jeniskendaraan=$_POST['jeniskendaraan'];
  $namakendaraan=$_POST['namakendaraan'];
  $tanggalbuat=$_POST['tanggalbuat'];
  $catatankendaraan=$_POST['catatankendaraan'];
  $nobpkb=$_POST['nobpkb'];
  $nostnk=$_POST['nostnk'];
  $statusstnk=$_POST['statusstnk'];
  $koneksi=new mysqli("localhost","root","","showroom");
  $sql="UPDATE `kendaraaan` SET `nomormesin` = '$nomormesin', `nomorrangka` = '$nomorrangka', `jeniskendaraan` = '$jeniskendaraan', `namakendaraan` = '$namakendaraan', `statusstnk` = '$statusstnk' WHERE `kendaraaan`.`nomormesin` = '$Kodekendaraaan';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord kendaraaan sudah tersimpan !";
  } else {
    echo "Rekord kendaraaan gagal tersimpan !";
  } 
}
?>
