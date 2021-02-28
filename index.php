<?php
    include("Mahasiswa.php");
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");

    $indah = new Mahasiswa();
    $indah->nim = "H1101191068";
    $indah->nama = "Indah sridianti";
    $indah->tanggal_lahir = "04 Maret 2001";
    $indah->jenis_kelamin = "Prerempuan";
    $indah = new MahasiswaBaru("H1101201068", "Indah sridianti", "2001-03-04", "Perampuan");
    $tegar = new Mahasiswa("H1101191071", "Tegar ferdigantara", "2001-09-24", "Laki-Laki");
    $devi = new Mahasiswa("H1101191057", "Devi indah wulandari", "2001-05-27", "Perempuan");
?>

    $tegar = new Mahasiswa();
    $tegar->nim = "H1101191071";
    $tegar->nama = "Tegar ferdigantara";
    $tegar->tanggal_lahir = "24 September 2001";
    $tegar->jenis_kelamin = "Laki-Laki";

    $devi = new Mahasiswa();
    $devi->nim = "H1101191039";
    $devi->nama = "Devi indah wulandari";
    $devi->tanggal_lahir = "27 Mei 2001";
    $devi->jenis_kelamin = "Perempuan";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php echo "<p>Hello World</p>"; ?>
    <?php 
        $madha->tampilkanNama(); 
        echo "<br>";
        $madha->tampilkanUmur(); 
        echo "<br>";
        $madha->tampilkanAngkatan(); 
    ?>
</body>
</html>