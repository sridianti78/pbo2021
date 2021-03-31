<?php
    use application\backend\Mahasiswa;

    class Cetak 
    {
        public function cetakKtm(Mahasiswa $mahasiswa)
        {
            echo "Data milik " . ".$mahasiswa->nama." . "dicetak";
        }

        public function cetakLirs(){
        }
    }
?>