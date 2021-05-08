<?php

namespace App;

class Teh implements Minuman
{
    public function buat()
    {
        echo "Tuangkan air panas sesuai keinginan kedalam gelas, ";
        echo "Masukkan teh kedalam gelas yang sudah disediakan dengan air panas, ";
        echo "Tunggu hingga warna air berubah warna, ";
        echo "Tambahkan gula sesuai keinginan jika ingin manis, ";
        echo "Aduk hingga gula larut dengan air teh.<br/>";
    }
    public function minum()
    {
        echo "Dapat diminum secara sedikit sedikit atau langsung dihabiskan.<br/>";
    }

    public function tambahEs()
    {
        echo "Tambahkan es batu untuk dinikmati secara dingin.<br/>";
    }
}