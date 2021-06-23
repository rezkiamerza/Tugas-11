<!DOCTYPE html>
<html>
<head>
	<title>input data kendaraan</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Input Data Kendaraan</h2>
	<form method="post">
			 <div class="form-group">
      <label for="nomormesin">Nomor Mesin Kendaraan</label>
      <input type="text" class="form-control" id="nomormesin" placeholder="Nomor Mesin Kendaraan" name="nomormesin"><br>
		<label for="nomorrangka">Nomor Rangka Kendaraan</label>
			<input type="text" name="nomorrangka" id="nomorrangka" placeholder="Nomor Rangka Kendaraan" class="form-control"><br>
		<label for="jeniskendaraan">Jenis Kendaraan</label>
			<input type="text" name="jeniskendaraan" placeholder="Jenis Kendaraan" class="form-control" id="jeniskendaraan"><br>
		<label for ="namakendaraan">Nama Kendaraan</label>
			<input type="text" name="namakendaraan" class="form-control" placeholder="Nama Kendaraan" id="namakendaraan"><br>
		<label for="tanggalbuat">Tanggal Buat</label>
			<input type="date" name="tanggalbuat" placeholder="Tanggal Buat" id="tanggalbuat" class="form-control"><br>
		<label for="catatankendaraan"> Catatan Kondisi Kendaraan</label>
			<textarea type="text" name="catatankendaraan" placeholder="Catatan Kondisi Kendaraan" id="catatankendaraan" class="form-control" row="5"></textarea><br>
		<label for="nobpkb"> Nomor BPKB</label>
			<input type="text" name="nobpkb" placeholder=" Nomor BPKB" id="nobpkb" class="form-control"><br>
		<label for="nostnk"> Nomor STNK</label>
			<input type="text" name="nostnk" placeholder="Nomor STNK" class="form-control" id="nostnk"><br>
		<label for="statusstnk">Status STNK </label>
			<input type="text" name="statusstnk" placeholder="Status STNK" class="form-control" id="statusstnk"><br>
		 <button type="submit" class="btn btn-primary" name="bSimpan">Simpan </button>

	</div>
</form>
</div>
</body>
</html>
<?php 
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
	
	$sql="INSERT INTO `kendaraaan`(`nomormesin`, `nomorrangka`, `jeniskendaraan`, `namakendaraan`, `tanggalbuat`, `catatankendaraan`, `nobpkb`, `nostnk`, `statusstnk`) VALUES ('".$nomormesin."','".$nomorrangka."', '".$jeniskendaraan."','".$namakendaraan."','".$tanggalbuat."','".$catatankendaraan."','".$nobpkb."','".$nostnk."','".$statusstnk."');";
	
		$q=$koneksi->query($sql);
		if ($q) {
			echo "Rekord pengguna sudah tersimpan !";
		} else {
			echo "Rekord pengguna gagal tersimpan !";
		}	
	}
	
