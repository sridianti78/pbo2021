<?php
require_once 'Mahasiswa.php';
require_once  'MahasiswaBaru.php';
require_once 'Cetak.php';

$tegar = new MahasiswaBaru('H1101191071','TEGAR FERDIGANTARA','2001-09-24','Pria');
$devi = new Mahasiswa('H1101191057','Devi Indah','2005-03-15','Wanita');
$cetakDevi = new Cetak();

?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?>
    <h3>Tegar ferdigantara </h3>
    <?php
      $tegar->tampilkanUmur();
      $tegar->bayarGedung();
    ?> 
    <h3>Devi Indah Wulandari </h3>
    <?php
      $devi->tampilkanUmur();
      $devi->bayarGedung();//tidak bisa
    ?><br>
    <?php
      $cetakDevi->cetakKtm('Indah Sridianti'); 
    ?>

  </body>
</html>