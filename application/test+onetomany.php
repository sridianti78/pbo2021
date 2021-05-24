<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

#indah = new Pwngguna(3, "Indah sridianti", new Alamat(5, "Pontianak"));

$lapak_bella = new Penjual();
$lapak_bella->setName('Bella Saja');
$lapak_bella->setId(2);

$lapak_taufik = new Penjual();
$lapak_taufik->setName('Taufik Jak');
$lapak_taufik->setId(1);

$lapak_devi = new Penjual();
$lapak_devi->setName('Devi juga');
$lapak_devi->setId(3);

$indah->setPenjual($lapak_bella);
$indah->setPenjual($lapak_taufik);
$indah->setPenjual($lapak_devi);

$penjual_indah =  $indah->getPenjual();
echo $penjual_indah[0]->getName(); // ada 3 index 0,1,2