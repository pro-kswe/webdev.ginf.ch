<?php
$cookiewert = $_COOKIE["besucher"];
if (empty($cookiewert)) {
    setcookie("besucher", "apfelbaum");
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Reisetipps für Zürich: Feedback</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');
                    });
                });
            }
        });
    </script>
</head>
<body>
<header class="hero is-info is-fullheight">
    <div class="hero-head">
        <nav class="navbar is-fixed-top has-background-info" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <img src="logo.png" alt="logo">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                   data-target="zurichNavbar">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="zurichNavbar" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="index.php">
                        Home
                    </a>
                    <a class="navbar-item" href="free_walking_tour.php">
                        Free-Walking-Tour
                    </a>
                    <a class="navbar-item" href="anmeldungen.php">
                        Anmeldungen
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="tile is-child is-4 is-align-content-end">
                    <h1 class="title is-2">Reisetipps für Zürich</h1>
                    <h2 class="subtitle is-4">Züri, Turicum, Zwinglistadt, Limmatstadt</h2>
                </div>
                <div class="tile is-child is-8">
                    <figure class="image is-2by1">
                        <img src="zurich.jpeg" alt="Zürich"/>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-foot">
        <nav class="tabs is-centered is-toggle-rounded is-toggle is-fullwidth">
            <div class="container mb-5">
                <ul>
                    <li>
                        <a href="#feedback">
                            <span class="icon is-small"><i class="fas fa-sign-in-alt" aria-hidden="true"></i></span>
                            <span>Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main>
    <section id="feedback" class="section">
        <h2 class="title">Danke für Ihre Anmeldung</h2>
        <div class="content">
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
                    $encrypted_password = password_hash($passwort, PASSWORD_DEFAULT);
                    echo "Passwort (verschlüsselt): $encrypted_password";
                    ?>
                </li>
            </ul>
            <?php
            $conn = mysqli_connect("ginf.ch", "dbu_22_webdev", "E4@9WCesk", "db_22_webdev");
            $sql = "insert into anmeldung (vorname, nachname, tour, sprache, anzahl, email, passwort) values ('$vorname', '$nachname', '$tour', '$sprache', $anzahl, '$email', '$encrypted_password')";
            $res = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if ($res == 1) {
                echo "<p>";
                echo "Anmeldung in der Datenbank gespeichert.";
                echo "</p>";
            }
            ?>
        </div>
    </section>
</main>
<footer class="footer">
    <address class="container has-text-centered">
        <p>
            Autor dieser Website: Oliver Probst<br>
            Kontakt: pro@kswe.ch<br>
            <?php
            echo date("d.m.Y");
            echo "<br>";
            $cookiewert = $_COOKIE["besucher"];
            $neuerCounter = 1;
            // Dateiname für den Besucherzähler.
            $file = 'counter.txt';
            // Prüfen, ob Datei bereits existiert.
            if (file_exists($file)) {
                // Dateiinhalt auslesen.
                $alterCounter = file_get_contents($file);
                // Counter nur erhöhen, falls das Cookie leer ist. Dies
                // bedeutet, der Benutzer ist zum ersten Mal auf der Webseite.
                if (empty($cookiewert)) {
                    $neuerCounter = $alterCounter + 1;
                } else {
                    $neuerCounter = $alterCounter;
                }
            }
            // Neuer Counter in die Datei schreiben.
            file_put_contents($file, $neuerCounter);
            echo "Es waren bereits $neuerCounter Besucher auf dieser Webseite.";
            ?>
        </p>
    </address>
</footer>
</body>
</html>