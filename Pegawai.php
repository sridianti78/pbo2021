<?php
    require_once("User.php");
    class Pegawai extends User
    {
        public $nip;
        public $nama;
        public $no_hp;
        public $gaji_pokok;

        function __construct($nip, $nama, $hp, $gaji){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $hp;
            $this->gaji_pokok = $gaji;
        }

        public function tampilkanGaji(){
            echo "Jumlah Gaji : $this->gaji_pokok";
        }
    }
?> 