<<?php
    require_once "initialize.php";
    use application\backend\Product;

    $pro = new Product();
    echo $pro->getProductType();
    $pro->setProductType("FlashDisk");
    echo "<br>";
    echo $pro->getProductType();
?>