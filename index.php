<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik</title>
    <?php include("head.php"); ?>
</head>
<?php
$httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
global $base;
$base = $httpProtocol . '://' . $_SERVER['HTTP_HOST'] . '/';
?>
<body class="has-navbar-fixed-top">
<header>
    <?php
    include("header.php");
    ?>
</header>
<main>
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php include("menu.php"); ?>
                </div>
                <div class="column is-9">
                    <div class="content">
                        <h3 class="title is-3">Willkommen!</h3>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Worum geht es hier?</h5>
                                Das Ziel dieser Website ist es Anfänger an die grundlegenden Webtechnologien
                                heranzuführen. Es sollen hier in kompakter Form die wesentlichen Befehle vorgestellt
                                werden. Nach Abschluss der Lerneinheit sind Sie in der Lage, eine einfache Website zu
                                erstellen. Diese Website deckt nicht alle Facetten der Webentwicklung ab, noch zeigt Sie
                                den Stand der Technik auf. Es geht viel mehr darum, durch das Erstellen einer Website
                                hinter die Kulissen des <abbr title="World Wide Web">WWW</abbr> zu blicken.<br> Es
                                ergibt keinen Sinn, alle Details, welche bereits auf anderen Websites bestehen, erneut
                                hier zur Verfügung zu stellen. Deshalb finden Sie auch passende Links zur weiteren
                                Lektüre.
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Schon gewusst?</h5>
                                Das <dfn>Webdesign</dfn> kümmert sich in der Regel nur um die visuelle Gestaltung einer
                                Website (Layout und Design). Die <dfn>Webentwicklung</dfn> (eng. web development oder
                                kurz web dev) sorgt für die technische Umsetzung. Es handelt sich somit um eine
                                Softwareentwicklung mit dem Fokus auf das <abbr title="World Wide Web">WWW</abbr>.<br>
                                Eine <dfn>Website</dfn> ist dabei der Fachbegriff für eine Webpräsenz (auch Webauftritt
                                genannt). Eine <dfn>Webpage</dfn> (dt. Webseite) ist eine einzelne Seite einer Website.
                                Mit <dfn>Homepage</dfn> wird die Startseite der Website bezeichnet - die Homepage ist
                                als eine <q>spezielle</q> Webpage.<br> Statt <q>Wir erstellen eine Homepage!</q> ist die
                                Aussage <q>Wir erstellen eine Website!</q> meist treffender, da man in der Regel mehrere
                                Webseiten (Web Pages) erstellt.
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Fehler? Tipps? Fragen?</h5>
                                Trotz sorgfältiger Arbeit können sich Fehler einschleichen. Schreiben Sie mir gerne eine
                                <a href="contact.php">E-Mail</a>. Ich bin für jeden Hinweis. Zögern Sie nicht mich auch
                                bei Unklarheiten zu
                                kontaktieren.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <?php
    include("footer.php");
    ?>
</footer>
</body>
</html>