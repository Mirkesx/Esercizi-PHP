<?php
    $cars = array();

    $cars["Fiat"] = ["500","127"];
    $cars["Lotus"] = ["500","127"];
    $cars["Fiat"] = ["500","127","Punto"];

    echo count($cars["Fiat"])+count($cars["Lotus"])."<br>";

    var_dump($cars);
?>