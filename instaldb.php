<?php 
$koneksi=new mysqli("localhost", "root", "");
$sql="create database showroom";
$q=$koneksi-> query($sql);
if($q){
	echo"Database Sudah Dibuat";
}
else{ echo "Database Gagal Dibuat";

}
$sql2="CREATE TABLE showroom.`kendaraaan`(
	`nomormesin`varchar(30) NOT NULL,
	`nomorrangka` varchar(30) NOT NULL,
	`jeniskendaraan`text NOT NULL,
	`namakendaraan` text NOT NULL,
	`tanggalbuat` date NOT NULL,
	`catatankendaraan`text  NULL,
	`nobpkb` varchar(20) NOT NULL,
	`nostnk` varchar(20) NOT NULL,
	`statusstnk`text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q2=$koneksi->query($sql2);
 if ($q2) {
	 echo "Tabel Barang sudah dibuat !";
 } else {
	 echo "Tabel Barang  gagal dibuat !";
 }

 ?>