<?php
    require_once "initialize.php";

    $tanggalku = new application\frontend\MyDate();

    echo $tanggalku->penanggalan();
?>