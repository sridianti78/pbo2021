<?php

namespace App;

class Alamat
{
    private $id;
    private $kota;

    fungction __construct($id, $kota)
    {
        $this->id = $id;
        $this->kota = $kota;
    }

    public function getKota()
    {
        return $this->kota;
    }
}