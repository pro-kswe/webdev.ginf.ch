<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: PHP-Dateien</title>
    <?php include("../../head.php"); ?>
</head>
<body class="has-navbar-fixed-top">
<header>
    <?php
    include("../../header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "phpDateien";
                    include("../php_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="phpDateien">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4"><abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Dateien</h4>
                        </div>
                        <div class="column is-6">
                            <?php
                            include("../php_breadcrumbs.php");
                            ?>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="content">
                            <div class="box">
                                <div class="block">
                                    <p>
                                        Jede <abbr title="Hypertext Markup Language">HTML</abbr>-Datei ist automatisch
                                        eine
                                        gültige <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei. Ändert man
                                        die
                                        Endung einer <abbr title="Hypertext Markup Language">HTML</abbr>-Datei in
                                        <code>.php</code> und fügt keinen <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Befehl
                                        hinzu, dann
                                        gibt der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        einfach
                                        nur
                                        das unveränderte <abbr
                                                title="Hypertext Markup Language">HTML</abbr> zurück. Das mag
                                        zwar nicht besonders sinnvoll sein, ist aber technisch problemlos möglich.

                                        Eine <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei besitzt die
                                        Dateinamen-Erweiterung <code>.php</code> und kann
                                        <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Code beinhalten. Nutzt man
                                        <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr> als Templatesprache (so
                                        wie in diesen Unterlagen), dann besteht eine <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei grösstenteils aus
                                        <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Code.
                                        Durch den Einsatz der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei
                                        hat
                                        man
                                        nun jedoch die Möglichkeit, in den
                                        <abbr title="Hypertext Markup Language">HTML</abbr>-Code <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitte einzufügen.
                                        Diese <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitte werden
                                        durch
                                        den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        verarbeitet.
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;title>PHP Demo&lt;/title>
&lt;/head>
&lt;body>
&lt;h1>Dies ist ein Test.&lt;/h1>
&lt;p>Diese Seite wurde abgerufen am:
   &lt;?php
   $zeitpunkt = date("d.m.Y H:i:s");
   echo $zeitpunkt;
   ?>
&lt;/p>
&lt;/body>
&lt;/html>
</code></pre>
                                    <p>
                                        Ein <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt beginnt immer
                                        mit dem öffnenden <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Tag
                                        <code>&lt;?php</code>
                                        und endet mit dem schliessenden <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Tag <code>?></code>. Es
                                        ist wichtig, dass hinter <code>&lt;?php</code> ein Leerraum steht
                                        (Leerzeichen, Tabulator
                                        oder Zeilenumbruch), andernfalls wird das öffnende <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Tag nicht erkannt. Durch
                                        die <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Tags kann der <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        <abbr title="Hypertext Markup Language">HTML</abbr>-Code von <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Code
                                        unterscheiden. Nur der Code innerhalb von <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Tags wird durch den <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter verarbeitet.
                                    </p>
                                    <div class="notification is-danger">
                                        Man kann an beliebigen Stellen einen <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt
                                        einbauen und beliebig viele <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitte
                                        erstellen. Alle <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitte
                                        werden nacheinander, von oben nach unten verarbeitet.
                                    </div>
                                </div>
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
    include("../../footer.php");
    ?>
</footer>
</body>
</html>