<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("../head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: PHP</title>
</head>
<body class="has-navbar-fixed-top">
<header>
    <?php
    include("../header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $is_active = "";
                    include("php_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="php">&nbsp;</span>
                    <div class="content">
                        <h4 class="title is-4">PHP<span class="tag is-info is-pulled-right">
                                <a class="has-text-white" href="#lernziele">Lernziele</a></span>
                        </h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Warum PHP?</h5>
                                <figure class="image is-pulled-right" style="width: 200px; height: 200px;">
                                    <img src="img/new-php-logo.png" alt="PHP Logo">
                                </figure>
                                Durch die bisherigen Webseiten (die ausschliesslich mit <abbr
                                        title="Hypertext Markup Language">HTML</abbr> und <abbr
                                        title="Cascading Style Sheets">CSS</abbr> erstellt
                                wurden) konnte keine Interaktion mit einem Benutzer erzeugt
                                werden. Der Inhalt jeder bisherigen Webseite wurde zu 100% durch den Entwickler der
                                Webseite erstellt. Eine Änderung des Inhalts ist bisher nur durch den Ersteller der
                                Webseite möglich. Nur er hat mit dem Passwort die Möglichkeit die <abbr
                                        title="Hypertext Markup Language">HTML</abbr> und
                                <abbr title="Cascading Style Sheets">CSS</abbr>-Dateien zu verändern. Moderne Websiten
                                funktionieren jedoch nicht so. Benutzer
                                sollen den Inhalt einer Website auch mitgestalten können: einen Eintrag in einem
                                Gästebuch vornehmen, einen Post auf Instagram erstellen, Online-Shopping bei digitec
                                oder die Anmeldung zu einer Free-Walking-Tour durchführen sind nur einige Beispiele.
                                Damit dies möglich ist, müssen wir eine Programmiersprache einsetzen. Wir lernen in
                                diesem Teil die Grundlagen der Webprogrammierung mit der Programmiersprache <abbr
                                        title="PHP: Hypertext Preprocessor">PHP</abbr>.
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Was ist <abbr
                                            title="PHP: Hypertext Preprocessor">PHP</abbr>?</h5>
                                <abbr
                                        title="PHP: Hypertext Preprocessor">PHP</abbr> ist eine serverseitige,
                                interpretierte Skriptsprache. Die Programmiersprache
                                wird somit nicht im Browser ausgeführt, sondern auf dem Server-Host (siehe
                                Abbildung). Der <abbr
                                        title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter ist das Programm,
                                welches auf dem Server-Host installiert ist und <abbr
                                        title="PHP: Hypertext Preprocessor">PHP</abbr>-Code interpretieren kann. Auf
                                dem Server-Host arbeiten nun Webserver und <abbr
                                        title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter zusammen, um eine
                                <abbr
                                        title="Hypertext Transfer Protocol">HTTP</abbr> Request Message zu verarbeiten.
                            </div>
                            <div class="block">
                                <figure class="image">
                                    <img style="width: 75%" src="img/php_client_server.jpeg"
                                         alt="Client-Server-Modell mit PHP-Interpreter.">
                                </figure>
                            </div>
                            <div class="block">
                                <span class="anchor" id="lernziele"></span>
                                <h5 class="title is-5">Lernziele</h5>
                                <ul>
                                    <li>
                                        Sie erklären wie der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        mit dem Webserver zusammenarbeitet.
                                    </li>
                                    <li>
                                        Sie erklären wie der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        eine <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei verarbeitet.
                                    </li>
                                    <li>
                                        Sie erklären den Unterschied zwischen einer statischen und einer dynamischen
                                        Webseite.
                                    </li>
                                    <li>
                                        Sie bauen <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> in eine Webseite
                                        ein und verwenden dabei Variablen, Funktionen, Berechnungen und
                                        if-else-Anweisungen.
                                    </li>
                                </ul>
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Links</h5>
                                <ul>
                                    <li>
                                        <a href="https://www.php.net">www.php.net</a>
                                    </li>
                                    <li>
                                        <a href="https://www.php.net/manual/de/getting-started.php">
                                            <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Handbuch
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wiki.selfhtml.org/wiki/PHP">SELFHTML: <abbr
                                                    title="PHP: Hypertext Preprocessor">PHP</abbr></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <?php
    include("../footer.php");
    ?>
</footer>
</body>
</html>