<?php
    require_once "initialize.php";
    use application\backend\MyDate;

    $the_date = new MyDate();
    $the_date->setDay(15);

    echo $the_date->getDay();
?>