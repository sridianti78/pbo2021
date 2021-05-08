<?php
namespace App;

class Kopi implements Minuman
{
    public function buat()
    {
        echo "Masak air panas hingga kurang lebih 100 derajat celcius, ";
        echo "masukkan kopi ke dalam gelas dan tuangakan air panas, ";
        echo "aduk sebanyak 60 kali putaran. ";
        echo "Diamkan selama 15 menit, ";
        echo "tambahkan gula aren.<br/>";
    }

    public function minum()
    {
        echo "Minum dengan perlahan sedikit demi sedikit.<br/><br/>";
    }

    public function tambahSusu()
    {
        echo "Tambahkan susu kedalam cangkir kopi.<br/>";
    }
}