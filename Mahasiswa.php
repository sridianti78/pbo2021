<?php
    class Mahasiswa
    require_once("User.php");
    class Mahasiswa extends User
    {
        public $nim;
        public $nama;
        public $tanggal_lahir;
        public $jenis_kelamin;

        public function tampilkanAngkatan(){
        function __construct($nim, $nama, $tgl, $jk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

        public function tampilkanAngkatan(){
            echo "Merupakan angkatan tahun 20" . substr($this->nim, 5, 2);
        }
        public function tampilkanUmur(){

            echo date_diff(date_create($this->tanggal_lahir), 
                date_create("today"))->y;
        }
        public function tampilkanNama(){
            echo $this->nama;
        }
    }
?> 