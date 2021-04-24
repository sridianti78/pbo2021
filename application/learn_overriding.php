<?php

class Pegawai
{
    public $nama;

    public function sapa()
    {
        echo "Hallo " . $this->nama . "saat ini anda adalah petugas . selamat dan semangat bekerja \n";
    }
    public function masuk()
    {
        echo "Anda masuk kerja pada tanggal " .date('Y-m-d') . " terimakasih kehadirannya \n";
    }
}

class StaffTu extend Pegawai
{
    public function sapa()
    {
        echo "Halo " . $this->nama . " anda merupakan Staff Tata usaha \n";
    }
    public function parentSapa()
    {
        return parent::sapa();
    }
}

$indah = new StaffTu ();
$rama->nama ='Indah Sridianti';
$indah->sapa();
$indah->masuk();
$indah->parentSapa();
