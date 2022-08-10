<div class="box">
    <span class="anchor" id="date"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>date</code>
        </h5>
        <?php
        $links["PHP Manual"] = "https://www.php.net/manual/de/function.date.php";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Ermittelt das aktuelle Datum bzw. die aktuelle Zeit in einer vorgegebenen Schreibweise (Format). Als
                Übergabe an die Funktion (Argument), muss man das Format für das Datum bzw. die Zeit als String
                notieren.
            </p>
            <div class="block is-pulled-left">
                <p>Syntax</p>
            </div>
        </div>
        <pre><code>date(FORMAT)</code></pre>
    </div>
    <h6 class="title is-6">Beispiel</h6>
    <p>
        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den Code auf der linken Seite als
        Eingabe. Es befindet sich ein <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Der
        Abschnitt wird verarbeitet. Die <code>date</code>-Funktion ermittelt den aktuellen Monat (da das Argument <code>"F"</code>
        ist). Der Monat wird als String in der Variablen gespeichert. Anschliessend wird mit <code>echo</code> die
        Information in das <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument integriert. Die Ausgabe ist auf
        der rechten Seite zu sehen.
    </p>
    <div class="columns">
        <div class="column">
            Eingabe: <code>index.php</code>
        </div>
        <div class="column">
            Ausgabe: <abbr title="Hypertext Markup Language">HTML</abbr>-Code
        </div>
    </div>
    <div class="columns">
        <div class="column">
                                    <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;title>Demo Website&lt;/title>
    &lt;meta charset="UTF-8">
&lt;/head>
&lt;body>
&lt;h1>Demo&lt;/h1>
&lt;?php
$monat = date("F");
echo "Es ist $monat.";
?>
&lt;/body>
&lt;/html>
</code></pre>
        </div>
        <div class="column">
                                    <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;title>Demo Website&lt;/title>
    &lt;meta charset="UTF-8">
&lt;/head>
&lt;body>
&lt;h1>Demo&lt;/h1>
<?php
$monat = date("F");
echo "Es ist $monat.";
?>
&lt;/body>
&lt;/html>
</code></pre>
        </div>
    </div>
    <div class="notification is-info">
        Da es sich bei <code>$monat = date("F");</code> um eine Zuweisung handelt, schliessen wir diese
        Zuweisung wie gewohnt mit einem Semikolon ab. Auf der rechten Seite steht nun einfach ein Funktionsaufruf,
        welcher das aktuelle Datum erzeugt und formatiert zurückgibt.
    </div>
</div>