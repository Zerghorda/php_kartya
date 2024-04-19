<?php
//import
include_once "Adatbazis.php";
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Magyar kártya</title>
</head>

<body>
    <?php
    $adatbazis = new Adatbazis();
    //lekérdezések:
    //$matrix = $adatbazis->adatLeker("kep", "szin");
    //$adatbazis->megjelenit($matrix);
    $adatbazis->modosit("szin", "nev", "green", "zöld");
    //$adatbazis->torles("szin","nev","zöld");
    $matrix = $adatbazis->adatLeker2("nev", "kep", "szin");
    $adatbazis->megjelenit2($matrix);
    if ($adatbazis->rekordokSzama("kartya") == 0) {
        $adatbazis->kartyaFeltolt();
    }
    $adatbazis->kapcsoltBezar();
    ?>
</body>

</html>