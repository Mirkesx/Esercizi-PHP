<!DOCTYPE HTML>

<?php 
    $number = "";
    $number_error = "";
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(empty($_GET["number"]))
            $number_error = "Indicare un numero!";
        else
            $number = $_GET["number"];
    }

    function test($n) {
        return preg_match("/[a-zA-Z]/",$n);
    }

    function cubo($n) {
        return("Il cubo di $n è: ".$n**3);
    }
?>

<html>
<head><title>esame_24_05_2016_1</title></head>
<body>
<h2>Cubo di un numero</h2>
<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    Numero:<input type="text" name="number" value="<?php echo $number ?>">
    <input type="Submit" value="Invia!">
</form>
<br><br>

<?php
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(empty($_GET["number"]) || test($_GET["number"]) )
            echo $number_error;
        else
            echo cubo($number)."<br>";
    }
?>

</body>
</html>