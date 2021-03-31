<?php
    namespace application\backend;
    require_once ("Mahasiswa.php");

    class MahasiswaBaru extends Mahasiswa
    {
        public $no_regristrasi;
        protected $no_regristrasi;

        function __construct($nim, $nama, $tgl, $jk,$no_regristrasi){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
            $this->no_registrasi = $no_regristrasi;
        }
        public function bayarGedung(){

                echo "$htis->username Anda Telah Bayar Uang Gedung";
        }

        // getter
        public function getNoRegristrasi(){
            return $this->no_registrasi = $no_reg;
        }

        // setter
        public function setNoRegristrasi($no_regristrasi){
            $this->no_registrasi=$no_regristrasi;
        }
    }
?>