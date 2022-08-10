<div class="box">
    <span class="anchor" id="rand"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>rand</code>
        </h5>
        <?php
        $links["PHP Manual"] = "https://www.php.net/manual/de/function.rand.php";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Erzeugt eine pseudozufällige Zahl zwischen einem Minimum und Maximum (inklusive). Die erzeugte
                Pseudozufallszahl wird zurückgegeben und kann in einer Variablen gespeichert werden. Bei jedem
                Seitenaufruf wird eine neue Pseudozufallszahl generiert.
            </p>
            <div class="block is-pulled-left">
                <p>Syntax</p>
            </div>
        </div>
        <pre><code>rand(MINIMUM, MAXIMUM)</code></pre>
    </div>
    <h6 class="title is-6">Beispiel</h6>
    <p>
        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den Code auf der linken Seite als
        Eingabe. Es befindet sich ein <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Der
        Abschnitt wird verarbeitet. Die <code>rand</code>-Funktion wird aufgerufen und verarbeitet. Es wird eine
        pseudozufällige Zahl zwischen 1 und 10 erzeugt und in einer Variablen gespeichert. Danach erfolgt eine Ausgabe
        mit <code>echo</code>. Die <abbr title="Hypertext Markup Language">HTML</abbr>-Ausgabe ist auf der rechten Seite
        zu sehen.
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
$zufallszahl = rand(1, 10);
echo "Die Zufallszahl lautet: $zufallszahl";
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
$zufallszahl = rand(1, 10);
echo "Die Zufallszahl lautet: $zufallszahl";
?>
&lt;/body>
&lt;/html>
</code></pre>
        </div>
    </div>
    <div class="notification is-info">
        Da es sich bei <code>$zufallszahl = rand(1, 10);</code> um eine Zuweisung handelt, schliessen wir diese
        Zuweisung wie gewohnt mit einem Semikolon ab. Auf der rechten Seite steht nun einfach ein Funktionsaufruf,
        welcher eine Zahl erzeugt.
    </div>
</div>