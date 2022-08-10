<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 5</title>
</head>
<body>
<h1>Aufgabe 5</h1>
<?php
$wochentag = date("D");
$zufallszahl = rand(1, 100);
$laenge = strlen($wochentag);
$luckyNumber = $laenge * $zufallszahl;
echo "Katja, deine Glückszahl lautet $luckyNumber.";
?>
</body>
</html>