<!DOCTYPE html>
<html>
<head>
	<title>Hapus Rekord Kendaraan</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1>Hapus Rekord Kendaraan</h1>
	<form method="post">
		<div class="form-grup">
			<label for ="hapus">Ketik Nama Kendaraan Yang Akan Di Hapus:</label>
			<input type="text" class="form-control" name="kendaraandihapus" id="hapus" placeholder="Ketik Nama Kendaraan">
		</div>
		<button type="submit" class="btn btn-primary" name="bhapus"onclick="return confirm('Apakah rekord akan di hapus?')">Hapus</button>
		
	</form>
</div>
</body>
</html>
<?php if (isset($_POST['bhapus'])) {
	$kendaraadihapus=$_POST['kendaraandihapus'];
	$koneksi=new mysqli("localhost","root","","showroom");
	$sql="DELETE FROM `kendaraaan` WHERE `kendaraaan`.`namakendaraan` = '".$kendaraadihapus."'";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "Rekord sudah dihapus !";
	} else {
		echo "Rekord gagal dihapus !";
	}
}