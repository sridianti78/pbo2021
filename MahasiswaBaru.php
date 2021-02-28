<?php 
    require_once("Mahasiswa.php");
    class MahasiswaBaru extends Mahasiswa
    {
        public $no_registrasi;

        function __construct($nim, $nama, $tgl, $jk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

        public function bayarGedung(){

        }
    }
?> 