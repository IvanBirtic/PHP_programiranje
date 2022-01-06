<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
    <!DOCTYPE HTML>
    <html lang="hr">
        <head>
            <title>Izracun prosjeka</title>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta name="description" content="Izracun ocjene iz kolokvija">
            <meta name="keywords" content="Izracun,broj,operacija">
            <meta name="author" content="I Birtic">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        </head>
    <body>
    <?php
		$first_num = $_POST['a'];
        $second_num = $_POST['b'];
        $result = '';
        if($first_num==1 || $second_num==1)
        {
            echo "Ocjena je nedovoljan.Ponovite kolokvij.";
        }
        else
        {
            $result=($first_num+$second_num)/2;
            echo "Srednja ocjena iz predmeta: $result";
        }
        if($result>=1.5 && $result<2.5)
        {
            echo"Konačna ocjena iz predmeta:2";
        }
        else if($result>=2.5 && $result<3.5)
        {
            echo "Konačna ocjena iz predmeta:3";
        }
        else if($result>=3.5 && $result<4.5)
        {
            echo "Konačna ocjena iz predmeta:4";
        }
        else if($result>=4.5 && $result<=5.0)
        {
            echo "Konačna ocjena iz predmeta:5";
        }
        ?> 
		<h1> Izracun ocjene iz kolokvija </h1>
        <p>Potrebno je napraviti formu za izračun ocjene iz kolokvija. Imamo uvjet da moramo izračunati srednju ocjenu iz prvog i drugog kolokvija. Ukoliko je jedan od kolokvija negativan, krajnja ocjena je negativna. Drugi uvjet je da ocjena ne smije biti manja od 1 i veća od 5</p>
        <form action="" method="post" >
        <label for="a">Ocijena I kolokvija: </label>
        <input type="number" name="a" id="a" min="1" max="5" required>
        <label for="b">Ocijena II kolokvija: </label>
        <input type="number" name="b" id="b"  min="1" max="5" required >
        <label for="c">Posalji:<label>
        <input type="submit" id="c" value=Posalji>
        </form>
        
    </body>
    </html>