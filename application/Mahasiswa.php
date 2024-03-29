<?php

    namespace App;
    
    class Mahasiswa extends User{
    //atribut
        protected $nama;
        protected $nim;
        protected $tanggal_lahir;
        protected $jenis_kelamin;
        const AKTIF = 1;
        const NON_AKTIF = 2;
        public static $status = self::AKTIF;
        public static $sks = 3;
        public static $bobot = 12;

        function __construct($nim, $nama, $tgl, $jk)
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
    }

        public function tampilkanAngkatan()
        {
            $akt = substr($this->nim, 5, -4);
            echo "Merupakan Angkatan Tahun 2019" . $akt . "<br>";
        }

        public function tampilkanUmur()
        {
            $tgl_lahir = date_create($this->tanggal_lahir);
            $umur = date_diff($tgl_lahir, date_create("today"))->y;

            echo $umur;
        }

        public function tampilkanNama()
        {
            echo $this->nama;
        }
        // Getter
        public function getNim(){
            return $this->nim;
        }
        public function getNama(){
            return $this->nama;
        }
        public function getTglLahir(){
            return $this->tanggal_lahir;
        }
        public function getJenisKelamin(){
            return $this->jenis_kelamin;
        }
        // Setter
        public function setNim($nim){
            $this->nim = $nim;
        }
        public function setNama($nama){
            $this->nama = $nama;
        }
        public function setTglLahir($tgl){
            $this->tanggal_lahir = $tgl;
        }
        public function setJenisKelamin($jk){
            $this->jenis_kelamin = $jk;
        }
        //static 
        public static function bergerak()
        {
            echo "agen solusi, bukan agen perubahan";
        }
        final public function tuntaskan()
        {
            self::bergerak();
            echo 'memperbaiki menjadi lebih baik';
        }
        //praktikum08
        public static function hitungSks()
        {
            echo "jumlah SKS nya adalah ". "<b>" . self::$sks * self::$bobot . "<b>" . "<br/>";
        }
    }
?>