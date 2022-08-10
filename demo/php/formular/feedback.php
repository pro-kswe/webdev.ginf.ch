<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
</head>
<body>
<header>
    <ul>
        <li><a href="anmeldung.html">Anmeldeformular</a></li>
    </ul>
</header>
<main>
    <section>
        <h2>Danke für Ihre Anmeldung</h2>
        <ul>
            <li>
                <?php
                $vorname = $_POST["vorname"];
                echo "Vorname: $vorname";
                ?>
            </li>
            <li>
                <?php
                $nachname = $_POST["nachname"];
                echo "Nachname: $nachname";
                ?>
            </li>
            <li>
                <?php
                $tour = $_POST["tour"];
                echo "Tour: $tour";
                ?>
            </li>
            <li>
                <?php
                $sprache = $_POST["sprache"];
                echo "Sprache: $sprache";
                ?>
            </li>
            <li>
                <?php
                $anzahl = $_POST["anzahl"];
                echo "Anzahl: $anzahl";
                ?>
            </li>
            <li>
                <?php
                $email = $_POST["email"];
                echo "E-Mail: $email";
                ?>
            </li>
            <li>
                <?php
                $passwort = $_POST["passwort"];
                echo "Passwort: $passwort";
                ?>
            </li>
        </ul>
    </section>
</main>
</body>
</html>