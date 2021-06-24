<?php

namespace App\Models;

class TenagaKependidikan extends Pengguna implements Pegawai 

{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($username,$password,$email,$nip,$nama,$alamat)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function hitungTunjanganKinerja()
    {

    }
    public function setNip($nip)
    {
        $this->nip = $nip;
    }


    public function presensiMasuk()
    {
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}