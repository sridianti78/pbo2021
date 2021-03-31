<?php
    spl_autoload_register(function ($class)
    {
        $num = strpos($class, "\\", strpos($class, "\\") + 1);
        $class_name = substr($class, 0, 11) . substr($class, $num);
        require_once $class_name . ".php";
    });
?>