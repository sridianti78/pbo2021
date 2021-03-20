<?php
require_once('Mahasiswa.php');

class Cetak {
  public function cetakKtm(Mahasiswa $mahasiswa){
    echo 'Data milik '.$mahasiswa->nama.' dicetak';
  }

  public function cetakLirs(){

  }

}
?>