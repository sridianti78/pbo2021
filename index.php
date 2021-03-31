<?php
  require_once('Mahasiswa.php');
  require_once('MahasiswaBaru.php');
  require_once('initialize.php');
  use application\backend\Mahasiswa;
  use application\backend\MahasiswaBaru;

  $tegar = new MahasiswaBaru('H1101191071','TEGAR FERDIGANTARA','2001-09-24','Pria');
  $indah = new Mahasiswa('H1101191068','INDAH SRIDIANTI','2001-03-04','Wanita');
  $devi = new Mahasiswa('H11011191067' 'DEVI INDAH WULANDARI','2001-05-23','Wanita')
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
        $indah->tampilkanNama(); 
        echo "<br>";
        $indah->tampilkanUmur(); 
        echo "<br>";
        $indah->tampilkanAngkatan(); 
    ?>
</body>
</html>