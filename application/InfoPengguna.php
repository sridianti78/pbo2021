<?php
namespace App;

use App\Pengguna;

class InfoPengguna
{
    private $id;
    private $no_hp;
    private $no_wa;
    private $instagram;
    private $penggna;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPengguna(Pengguna $pengguna)
    {
        $this->instagram = $username;
    }

    public function getInstagram()
    {
        return $this->intagram;
    }
}