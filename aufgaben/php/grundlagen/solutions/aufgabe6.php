<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 6</title>
</head>
<body>
<h1>Aufgabe 6</h1>
<?php
$stunde = date("H");
if ($stunde > 4 and $stunde < 12) {
    echo "Guten Morgen Katja!";
} elseif($stunde < 18) {
    echo "Guten Tag Katja!";
} elseif ($stunde < 24) {
    echo "Guten Abend Katja!";
} else {
    echo "Es ist spät...Katja!";
}
?>
</body>
</html>