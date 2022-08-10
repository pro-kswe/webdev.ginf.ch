<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 4</title>
</head>
<body>
<h1>Aufgabe 4</h1>
<?php
echo date("Y");
echo "<br>";
echo date("M");
echo "<br>";
echo date("m");
echo "<br>";
echo date("d");
echo "<br>";
echo date("D");
echo "<br>";
echo date("H");
echo "<br>";
echo date("i");
echo "<br>";
echo date("s");
echo "<br>";
$datum = date("d.m.Y");
$uhrzeit = date("H:m:s");
echo "Heute ist der $datum. Es ist $uhrzeit Uhr.";
?>
</body>
</html>