<?php 
include ('Mahasiswa.php');

$indah = new Mahasiswa();
$tegar = new Mahasiswa();
$devi = new Mahasiswa();

$indah->nim = "H1101191068"; 
$indah->nama = "indah sridianti";
$indah->tanggal_lahir = "04-03-2001";
$indah->jenis_kelamin = "perempuan<br>";

$tegar->nim = "H1101191071"; 
$tegar->nama = "tegar ferdigantara";
$tegar->tanggal_lahir = "24-09-2001";
$tegar->jenis_kelamin = "Laki-laki<br>";

$devi->nim = "H1101191057"; 
$devi->nama = "devi indah wulandari";
$devi->tanggal_lahir = "27-05-2001";
$devi->jenis_kelamin = "perempuan<br>";
?>