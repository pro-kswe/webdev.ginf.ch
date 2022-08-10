<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: Impressum</title>
</head>
<?php
$httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
global $base;
$base = $httpProtocol . '://' . $_SERVER['HTTP_HOST'] . '/';
?>
<body>
<header>
    <?php
    include("header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php include("menu.php"); ?>
                </div>
                <div id="about" class="column is-9">
                    <div class="content">
                        <h4 class="title is-4">Impressum</h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Diensteanbieter</h5>
                                <address>
                                    <p>
                                        Oliver Probst<br>
                                        Am Kaltenbach 10<br>
                                        79761 Waldshut-Tiengen<br>
                                        Deutschland
                                    </p>
                                </address>
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Kontaktmöglichkeiten</h5>
                                <p>E-Mail-Adresse: <a href="mailto:info@webdev.ginf.ch">info@webdev.ginf.ch</a></p>
                                <p>
                                    Kontaktformular: <a href="https://webdev.ginf.ch/contact.php">https://webdev.ginf.ch/contact.php</a>
                                </p>
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Audiovisuelle Mediendienste</h5>
                                <p>Sitzland: Deutschland</p>
                                <p>
                                    Zuständige Regulierungs-, bzw. Aufsichtsbehörde: Landesanstalt für Kommunikation
                                    Baden-Württemberg (LFK), <a href="https://www.lfk.de/">https://www.lfk.de/</a>
                                </p>
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Haftungs- und Schutzrechtshinweise</h5>
                                <p>
                                    <strong>Haftungsausschluss</strong>: Die Inhalte dieses Onlineangebotes wurden
                                    sorgfältig und nach unserem aktuellen Kenntnisstand erstellt, dienen jedoch nur der
                                    Information und entfalten keine rechtlich bindende Wirkung, sofern es sich nicht um
                                    gesetzlich verpflichtende Informationen (z.B. das Impressum, die
                                    Datenschutzerklärung, AGB oder verpflichtende Belehrungen von Verbrauchern) handelt.
                                    Wir behalten uns vor, die Inhalte vollständig oder teilweise zu ändern oder zu
                                    löschen, soweit vertragliche Verpflichtungen unberührt bleiben. Alle Angebote sind
                                    freibleibend und unverbindlich.
                                </p>
                                <p>
                                    <strong>Links auf fremde Webseiten</strong>: Die Inhalte fremder Webseiten, auf die
                                    wir direkt oder indirekt verweisen, liegen außerhalb unseres Verantwortungsbereiches
                                    und wir machen sie uns nicht zu Eigen. Für alle Inhalte und Nachteile, die aus der
                                    Nutzung der in den verlinkten Webseiten aufrufbaren Informationen entstehen,
                                    übernehmen wir keine Verantwortung.
                                </p>
                                <p>
                                    <strong>Urheberrechte und Markenrechte</strong>: Alle auf dieser Website
                                    dargestellten Inhalte, wie Texte, Fotografien, Grafiken, Marken und Warenzeichen
                                    sind durch die jeweiligen Schutzrechte (Urheberrechte, Markenrechte) geschützt. Die
                                    Verwendung, Vervielfältigung usw. unterliegen unseren Rechten oder den Rechten der
                                    jeweiligen Urheber bzw. Rechteinhaber.
                                </p>
                                <p>
                                    <strong>Hinweise auf Rechtsverstöße</strong>: Sollten Sie innerhalb unseres
                                    Internetauftritts Rechtsverstöße bemerken, bitten wir Sie uns auf diese hinzuweisen.
                                    Wir werden rechtswidrige Inhalte und Links nach Kenntnisnahme unverzüglich
                                    entfernen.
                                </p>
                                <p class="seal">
                                    <a href="https://datenschutz-generator.de/?l=de"
                                       title="Rechtstext von Dr. Schwenke - für weitere Informationen bitte anklicken."
                                       rel="noopener noreferrer nofollow">
                                        Erstellt mit kostenlosem Datenschutz-Generator.de von Dr. Thomas Schwenke
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<footer class="footer">
    <?php
    include("footer.php");
    ?>
</footer>
</body>
</html>