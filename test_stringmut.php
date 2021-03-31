<?php
    require_once "initialize.php";
    use application\backend\StringMutator;

    $kata = new StringMutator("Dian Prawira");
    $hasil = $kata->bold()->italic()->underscore()->getWord();

    echo $hasil;
?>