<?php

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(empty($_GET["number"]))
            echo "Indicare un numero!";
        else
            echo $_GET["number"]**3;
    }

?>