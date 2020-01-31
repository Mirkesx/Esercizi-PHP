<?php
    $temp["Roma"]=25;
    $temp["Milano"]=18;
    $temp["Brescia"]=16;
    $temp["Catania"]=30;
    $temp["Palermo"]=28;
    $temp["Verona"]=19;
    $temp["Napoli"]=29;
    $temp["Firenze"]=22;

    $GLOBALS["temp"] = $temp;

    function getTemperature($city) {
        return $GLOBALS["temp"][$city];
    }

    function getAllTemperature() {
        $somma = "";
        foreach($GLOBALS["temp"] as $x => $y) {
            $somma .= $x.":".$y."<br>";
        }
        return $somma;
    }

    function printValue() {
        if(!empty($_GET["temp_city"])) {
            return $_GET["temp_city"];
        }
        else 
            return "ciao";
    }
?>

<html>
<head></head>
<body>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>" >
    <input type="text" value="<?php echo printValue(); ?>" >
    <select name="temp_city">
        <option>Roma</option>
        <option <?php if (printValue() == "Milano") echo 'selected'; ?> >Milano</option>
        <option>Brescia</option>
        <option>Catania</option>
        <option>Palermo</option>
        <option>Verona</option>
        <option>Napoli</option>
        <option>Firenze</option>
    </select>
    <input type="submit" value="Invia"/>
    </form>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" >
    Ricevi tutte le temperature:
    <input type="submit" value="Richiedi"/>
    </form>

    <h2>Output</h2>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            echo getTemperature($_GET["temp_city"]);
        }
    ?>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo getAllTemperature();
        }
    ?>
</body>
</html>