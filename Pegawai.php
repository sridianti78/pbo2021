<?php
    require_once("User.php");

    class Pegawai extends User
    {
        public $nip;
        public $nama;
        public $no_hp;
        public $gaji_pokok;
        protected $nip;
        protected $nama;
        protected $no_hp;
        protected $gaji_pokok;

        function __construct($nip, $nama, $hp, $gaji){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $hp;
            $this->gaji_pokok = $gaji;
        }
        public function tampilkanGaji(){
            echo "Jumlah gaji : $this->gaji_pokok";
        }
        //setter
        public function setNip($nip){
            $this->nip=$nip;
        }
        public function setNama($nama){
            $this->nama=$nama;
        }
        public function setNoHp($no_hp){
            $this->no_hp=$no_hp;
        }
        public function setGajiPokok($gaji_pokok){
            $this->gaji_pokok=$gaji_pokok;
        }
        // getter
        public function getNip(){
            return $this->nip;
        }
        public function getNama(){
            return $this->nama;
        }
        public function getNoHp(){
            return $this->no_hp;
        }
        public function getGajiPokok(){
            return $this->gaji_pokok;
        }
    }
?> 