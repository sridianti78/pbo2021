<?php

namespace App\Controllers;

use App\Models;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class TugasAkhirController extends Controller 
{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji)
    {
        $this->id = $id;
        $this->judulTA = $judul;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }

    function __construct($sc)
    {
        $this->stateCode = $sc;
    }

    public function daftarkanTA()
    {
    }

    public function ubahTA()
    {
    }

    public function validasiPendaftaran()
    {
    }

    public function inputNilaiSempro()
    {
    }

    public function inputNilaiSemhas()
    {
    }

    public function inputNilaiSidang()
    {
    }
}