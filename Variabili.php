<?php
    $a = "ciao";
    $b = 2;

    echo "Prova $a $b<br>";

    echo "Prova ". $a ." ". $b;


    $a = array(1,2,3,4,5,6);

    echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";

    var_dump($a);

    $c = PHP_FLOAT_MAX+PHP_FLOAT_MAX;

    var_dump($c);

    $a = array(1,2);
    $b = array(2,1);

    var_dump($a==$b);
?>