<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: Projekte (Teil 1: HTML)</title>
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
                    $isActive = "projekteHtml";
                    include("../projekte_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="projekteHtml">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Projekt: Teil 1 (HTML)</h4>
                        </div>
                        <div class="column is-6">
                            <?php
                            include("../projekte_breadcrumbs.php");
                            ?>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="content">
                            <div class="box">
                                <div class="block">
                                    <p>
                                        Erstellen Sie Ihre eigene Website mit <abbr title="Hypertext Markup Language">HTML</abbr>
                                        (und nur mit <abbr title="Hypertext Markup Language">HTML</abbr>!). Das Thema
                                        kann (fast) frei gewählt werden. Es müssen folgende Bedingungen eingehalten
                                        werden:
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Die Website besteht aus <b>mindestens</b> drei Webseiten. Eine <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Datei hat den
                                                Namen <code>index.html</code>. Verwenden Sie für die restlichen <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Dateien sinnvolle
                                                Namen.
                                            </p>
                                            <div class="notification is-danger">
                                                Der <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Dateiname
                                                beinhaltet <b>keine</b> Leerzeichen, <b>keine</b>
                                                Sonderzeichen, <b>keine</b> Umlaute (ä, ü und ö) und besteht
                                                ausschliesslich aus <b>Kleinbuchstaben</b>.
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                Ihre Website verwendet <b>alle</b> <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Elemente, welche
                                                auf <a href="../../html/html_main.php#html">dieser
                                                    Website</a> vorgestellt werden. Es müssen nicht alle optionalen
                                                Attribute
                                                verwendet werden.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Sie verwenden eine Tabelle und bauen diese <b>nicht</b> in der <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Datei <code>index.html</code>
                                                ein. Fügen Sie die Tabelle in eine <b>andere</b> <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Datei ein.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Die Website verfügt über ein einheitliches Menü. Das Menü soll es dem
                                                Benutzer ermöglichen, zwischen den Webseiten zu navigieren.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Sie verwenden ein Formular. Es soll die Möglichkeit bestehen, sich für
                                                "etwas"
                                                anzumelden (z.B. eine Free-Walking-Tour, einen Kochkurs, einen Malkurs,
                                                einen Hackathon, eine LAN-Party, ...) oder "etwas" zu bestellen (Bücher,
                                                Möbel, ...). Erstellen Sie das Formular <b>nicht</b> in der <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Datei <code>index.html</code>.
                                                Verwenden Sie auch ein <code>select</code>-Element und drei verschiedene
                                                <code>input</code>-Elemente (unterschiedliche <code>type</code>-Werte
                                                verwenden).
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Sie fügen eine Bilddatei zu Ihrer Website hinzu. Achten Sie darauf, dass
                                                die Bilddatei ebenfalls hochgeladen wird.
                                            </p>
                                            <div class="notification is-danger">
                                                Der Bilddateiname beinhaltet <b>keine</b> Leerzeichen, <b>keine</b>
                                                Sonderzeichen, <b>keine</b> Umlaute (ä, ü und ö) und besteht
                                                ausschliesslich aus <b>Kleinbuchstaben</b>.
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                Sie verwenden für <b>jede</b> <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Datei die folgende
                                                Vorlage (Template):
                                            </p>
                                            <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;title>TITEL&lt;/title>
&lt;/head>
&lt;body>
&lt;header>
    &lt;!-- Hier kommt das Menü hin. -->
&lt;/header>
&lt;main>
    &lt;section>
        &lt;h2>Abschnitt 1&lt;/h2>
    &lt;/section>
    &lt;section>
        &lt;h2>Abschnitt 2&lt;/h2>
    &lt;/section>
    &lt;!-- Weitere Abschnitte sind möglich. -->
&lt;/main>
&lt;footer>
    &lt;!-- Angaben zum Autor -->
&lt;/footer>
&lt;/body>
&lt;/html>
</code></pre>
                                        </li>
                                        <li>
                                            <p>
                                                Die <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Dokumente sind
                                                fehlerfrei (W3C konform, siehe <a href="https://validator.w3.org">https://validator.w3.org</a>).
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Sie führen das Projekt <b>selbstständig</b> durch. Das Kopieren einer
                                                vollständigen Website ist nicht erlaubt (kein Plagiat).
                                            </p>
                                        </li>
                                    </ul>
                                    <p>
                                        Sie finden <a href="http://webdev.ginf.ch/demo/html/index.html">hier</a>
                                        ein Beispiel einer Website (Reiseinformationen über Rom).
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
    include("../../footer.php");
    ?>
</footer>
</body>
</html>