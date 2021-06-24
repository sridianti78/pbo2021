<?php

namespace App\Models;

use App\Models\tugasAkhir;
use App\Models\PerguruanTinggi;

class Dosen extends Pengguna implements Pegawai
{
    protected $nidn;
    protected $jabatan_akademis;

    function __construct($nip, $nama, $hp, $gaji,$nidn,$jabatan_akademis)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gaji;
        $this->nidn = $nidn;
        $this->jabatan_akademis = $jabatan;
    }

    public function mengajar()
    {   
        echo $this->nama . "sedang mengajar";
    }
    public function meneliti()
    {
        echo $this->nama . " sedang meneliti<br>";
    }
    // Getter
    public function getNama(){
        return $this->nama;
    }
    public function getNidn(){
        return $this->nidn;
    }
    public function getJabatanAkademis(){
        return $this->jabatan_akademis;
    }
    // Setter
    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    public function setJabatanAkademis($jabatan){
        $this->jabatan_akademis = $jabatan;
    }
}

namespace application\frontend;

class Dosen
{
public function ucapan()
{
    echo "Thanks You";
}
}
?>