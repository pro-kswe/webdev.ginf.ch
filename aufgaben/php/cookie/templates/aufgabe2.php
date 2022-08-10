<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 2</title>
</head>
<body>
<h1>Aufgabe 2</h1>
<?php
$neuerCounter = 1;
// Dateiname für den Besucherzähler.
$file = 'counter.txt';
// Prüfen, ob Datei bereits existiert.
if (file_exists($file)) {
    // Dateiinhalt auslesen.
    $alterCounter = file_get_contents($file);
    // Counter erhöhen.
    $neuerCounter = $alterCounter + 1;
}
// Neuer Counter in die Datei schreiben.
file_put_contents($file, $neuerCounter);
echo "Es waren bereits $neuerCounter Besucher auf dieser Webseite.";
?>
</body>
</html>