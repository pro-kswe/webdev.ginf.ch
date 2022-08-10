<div class="box">
    <span class="anchor" id="strlen"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>strlen</code>
        </h5>
        <?php
        $links["PHP Manual"] = "https://www.php.net/manual/de/function.strlen.php";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Ermittelt für einen String (Argument) die Länge. Die Länge eines Strings sind die Anzahl der Zeichen.
                Die doppelten Anführungszeichen werden nicht mitgezählt.
            </p>
            <div class="block is-pulled-left">
                <p>Syntax</p>
            </div>
        </div>
        <pre><code>strlen(STRING)</code></pre>
    </div>
    <h6 class="title is-6">Beispiel</h6>
    <p>
        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den Code auf der linken Seite als
        Eingabe. Es befindet sich ein <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Der
        Abschnitt wird verarbeitet. Die <code>strlen</code>-Funktion ermittelt die Anzahl der Zeichen für den String
        <code>"KSWE"</code> (da in der Variablen der String gespeichert ist). Anschliessend wird mit <code>echo</code>
        die Information in das <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument integriert. Die Ausgabe ist
        auf der rechten Seite zu sehen.
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
$laenge = strlen("KSWE");
echo "Anzahl Zeichen in KSWE: $laenge";
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
$laenge = strlen("KSWE");
echo "Anzahl Zeichen in KSWE: $laenge";
?>
&lt;/body>
&lt;/html>
</code></pre>
        </div>
    </div>
    <div class="notification is-info">
        Da es sich bei <code>$laenge = strlen("KSWE");</code> um eine Zuweisung handelt, schliessen wir diese
        Zuweisung wie gewohnt mit einem Semikolon ab. Auf der rechten Seite steht nun einfach ein Funktionsaufruf,
        welcher das aktuelle Datum erzeugt und formatiert zurückgibt.
    </div>
</div>