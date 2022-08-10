<?php
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$tour = $_POST["tour"];
$sprache = $_POST["sprache"];
$anzahl = $_POST["anzahl"];
$email = $_POST["email"];
$passwort = $_POST["passwort"];

$cookieName = "besucher";
$cookieWert = $vorname;
setcookie($cookieName, $cookieWert);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
</head>
<body>
<header>
    <img src="images/rom_wappen.png" alt="Wappen von Rom">
    <h1>Reisetipps für Rom</h1>
    <nav>
        <ul>
            <li><a href="index.php">Startseite</a></li>
            <li><a href="anmeldung.html">Anmeldung zur Free-Walking-Tour</a></li>
        </ul>
    </nav>
</header>
<main>
    <section>
        <h2>Danke für Ihre Anmeldung</h2>
        <ul>
            <li>
                <?php echo "Vorname: $vorname"; ?>
            </li>
            <li>
                <?php echo "Nachname: $nachname"; ?>
            </li>
            <li>
                <?php echo "Tour: $tour"; ?>
            </li>
            <li>
                <?php echo "Sprache: $sprache"; ?>
            </li>
            <li>
                <?php echo "Anzahl: $anzahl"; ?>
            </li>
            <li>
                <?php echo "E-Mail: $email"; ?>
            </li>
            <li>
                <?php echo "Passwort: $passwort"; ?>
            </li>
        </ul>
    </section>
</main>
</body>
</html>