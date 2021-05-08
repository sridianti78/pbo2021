<?php
require_once('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\EsJeruk;
use App\Teh;

$cendol_indah = new Cendol();
$cendol_indah->minum();

$kopi_hitam = new Kopi();
$kopi_hitam->buat();
$kopi_hitam->minum();

$kopi_susu = new Kopi();
$kopi_susu->buat();
$kopi_susu->tambahSusu();
$kopi_susu->minum();

EsJeruk::diLihat();

$teh_siam = new Teh();
$teh_siam->buat();
$teh_siam->tambahEs();
$teh_siam->minum();