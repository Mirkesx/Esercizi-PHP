<!DOCTYPE HTML>
<html>
<head><title>Esercizio_Prof</title></head>
<body>

<?php
$una_stringa = "";
$una_stringa_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["una_stringa"])) 
        $una_stringa_err = "!!! Inserisci una stringa";
    else
        $una_stringa = $_POST["una_stringa"];
} ?>

<h2>Form da riempire</h2><br>
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    Stringa: <input type="text" name="una_stringa" value="<?php echo $una_stringa ?>">
    <?php echo $una_stringa_err."<br><br>"?>
    <input type="submit" value="Invia"/>
</form>

<br>

<h2>Output</h2><br>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["una_stringa"])) {
        echo "La stringa \"$una_stringa\" ha lunghezza ". strlen($una_stringa) . "<br>";
?>
<br><br>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <input type="submit" value="Ricarica">
</form>
<?php
    }
    else echo "Non appena invierai una stringa apparirà qualcosa qua.<br>";
?>

</body>
</html>