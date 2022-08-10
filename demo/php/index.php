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
    <title>Reisetipps für Zürich: Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/fd94392668.js" crossorigin="anonymous"></script>
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
                        <a href="#allgemeines">
                            <span class="icon is-small"><i class="fas fa-info" aria-hidden="true"></i></span>
                            <span>Allgemeines</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anreise">
                            <span class="icon is-small"><i class="fas fa-car-side" aria-hidden="true"></i></span>
                            <span>Anreise</span>
                        </a>
                    </li>
                    <li>
                        <a href="#12hrs">
                            <span class="icon is-small"><i class="fas fa-clock" aria-hidden="true"></i></span>
                            <span>12hrs in Zürich</span>
                        </a>
                    </li>
                    <li>
                        <a href="#sehenswuerdigkeiten">
                            <span class="icon is-small"><i class="fas fa-city" aria-hidden="true"></i></span>
                            <span>Sehenswürdigkeiten</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main>
    <section id="allgemeines" class="section">
        <h2 class="title">Allgemeines</h2>
        <div class="box">
            <div class="content">
                <p>
                    <a href="https://www.stadt-zuerich.ch">Zürich</a> liegt an der <b>Limmat</b>. Deshalb wird die
                    Stadt auch
                    <i>Limmatstadt</i> genannt. Es leben rund 400 000 Einwohner in der Stadt. Zürich ist in zwölf Kreise
                    aufgeteilt.
                    Die Geschichte der Stadt geht bis in die Römerzeit zurück. Hier ein Text über zwei der drei
                    Stadtpatrone:
                </p>
                <p>
                    <b>Felix und Regula</b><br/>
                    Die ersten Christen, die in unserer Gegend den neuen Glauben verkündeten, waren die Geschwister
                    Felix und Regula mit ihrem Begleiter und Diener Exuperantius. Sie waren wegen ihres
                    Glaubens aus dem Wallis vertrieben worden. In einer Hü̈tte am Ufer der Limmat fü̈hrten sie ein
                    frommes Leben und versuchten, die Heiden vom Aberglauben und Götzendienst zu befreien.
                    Das vernahm der römische Statthalter Decius, der in einer Burg auf dem Lindenhof wohnte. Er
                    hasste den christlichen Glauben. Eines Tages, als Felix und Regula in ihrer Huütte beteten,
                    wurden sie samt ihrem Gefährten gefangengenommen. Die Knechte fü̈hrten sie auf die Burg vor
                    ihren Herrn. Der forderte sie auf, den christlichen Glauben abzuschwören und den heidnischen
                    Göttern zu opfern. Aber die frommen Geschwister sagten: <q>Wir opfern deinen Göttern nicht und
                        beten deine Götter nicht an, sondern den allmächtigen Gott, unsern Heiland.</q> Der Statthalter
                    drohte, er werde sie quälen und peinigen. Aber die Geschwister erwiderten: <q>Unsere Leiber hast
                        du in deiner Gewalt, aber unsere Seelen nicht.</q> Da wurden alle drei an Säulen gebunden und
                    mit Peitschen und eisernen Stäben blutig geschlagen. Doch sie klagten nicht, sondern priesen
                    Gott und sprachen:
                </p>
                <blockquote>
                    Wir danken dir, Herr Gott, Jesus Christus, dass wir um deines Namens willen so viel leiden dürfen.
                </blockquote>
                <p>
                    Als nun Decius sah, dass sie trotz allen Martern standhaft blieben, befahl er, man solle die
                    Gefangenen
                    ans andere Ufer hinü̈berfü̈hren und mit dem Beile enthaupten. Mit erhobenen Händen blickten sie noch
                    gegen den Himmel und riefen:
                </p>
                <blockquote>Barmherziger Gott, nimm unser Haupt gnädig zum Opfer an!</blockquote>
                <p>
                    Dann beugten sie sich nieder auf den Block und empfingen den Todesstreich. Doch siehe, die
                    Enthaupteten nahmen die blutigen Häupter auf ihre Arme und schritten durch die erschrockene
                    Menge zum nahen Huügel hinan. Dort wurden sie dann begraben. Sie waren ihrem Glauben treu geblieben
                    bis
                    in den Tod.
                </p>
            </div>
        </div>
    </section>
    <section id="anreise" class="section">
        <h2 class="title">Anreise</h2>
        <div class="box">
            <div class="content">
                <ul>
                    <li>
                        Flugzeug: Der Flughafen Zürich ist ein Drehkreuz Europas. Es werden zahlreiche
                        Direktverbindungen
                        von und nach Zürich angeboten.
                    </li>
                    <li>
                        Zug: Der Hauptbahnhof von Zürich (Zürich HB) ermöglicht eine schnelle und einfache Anreise aus
                        allen
                        Orten der Schweiz. Auch internationale Verbindungen werden mehrmals pro Tag angeboten.
                    </li>
                    <li>
                        Auto: Autobahn A1 von Bern, Autobahn A2/A3 von Basel bzw. A3 von Chur, Autobahn A4 von
                        Schaffhausen
                        bzw. Zug.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="12hrs" class="section">
        <h2 class="title">12hrs in Zürich</h2>
        <div class="box">
            <div class="content">
                <ol>
                    <li>08:00 Uhr Frühstück im <a href="https://www.kafischnaps.ch/de/">Kafischnaps</a> (auch gut für
                        eine
                        Übernachtung)
                    </li>
                    <li>10:00 Uhr In der Alstadt schlendern: Starten Sie am Central. Nehmen Sie die Polybahn zur ETH.
                        Gehen
                        Sie von dort über die UZH ins Niederdorf. Die Tour endet am Bellevue.
                    </li>
                    <li>12:00 Uhr Schnappen Sie sich einen Snack beim <i>Sternen Grill</i>. Eine Bratwurst?</li>
                    <li>14:00 Uhr Über den Opernplatz zum Bürkliplatz. Danach durch die Bahnhofstrasse zum Hauptbahnhof.
                        Nehmen Sie dort ein Tram zum Schiffbau.
                    <li>16:00 Uhr Zürich West: Freitag Tower, Turbinenplatz, Museum für Gestaltung</li>
                    <li>18:00 Uhr Schauen Sie ob es bei Chillies ein All-You-Can-Eat Buffet gibt.</li>
                    <li>20:00 Uhr Falls Fussball läuft gehen Sie ins <q>Kaiser Franz</q> sonst ins <q>El Lokal</q></li>
                </ol>
            </div>
        </div>
    </section>
    <section id="sehenswuerdigkeiten" class="section">
        <h2 class="title">Sehenswürdigkeiten</h2>
        <div class="box">
            <div class="content">
                <ul>
                    <li>Paradeplatz</li>
                    <li>Sechseläutenplatz mit Opernhaus</li>
                    <li>ETH und UZH</li>
                    <li>Niederdorf</li>
                    <li>Limmatufer mit Grossmünster</li>
                </ul>
            </div>
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