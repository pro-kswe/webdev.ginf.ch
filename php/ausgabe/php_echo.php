<div class="box">
    <span class="anchor" id="echo"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>echo</code>
        </h5>
        <?php
        $links["PHP Manual"] = "https://www.php.net/manual/en/function.echo";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Mit <code>echo</code> erzeugt der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter eine
                Ausgabe, die in das resultierende <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument
                integriert wird. <code>echo</code> produziert einen String. Ausdrücke die keinen String darstellen (zum
                Beispiel eine Addition) werden ausgewertet und dann zu einem String umgewandelt. <code>echo</code>
                verhält sich ähnlich wie die <code>print</code>-Funktion in Python. Im Gegensatz zur <code>print</code>-Funktion
                in Python, ist <code>echo</code> keine Funktion, sondern ein Sprachkonstrukt. Ein Sprachkonstrukt ist
                ein
                syntaktisch vorgegebenes Element einer Programmiersprache mit einer vorgegebenen Bedeutung. Schleifen
                und bedingte Anweisungen sind zum Beispiel auch Sprachkonstrukte.
            </p>
            <div class="block is-pulled-left">
                <p>Syntax</p>
            </div>
        </div>
        <pre><code>echo STRING</code></pre>
    </div>
    <h6 class="title is-6">Beispiel 1</h6>
    <p>
        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den Code auf der linken Seite als
        Eingabe. Es befindet sich ein <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Der
        Abschnitt wird verarbeitet. Der <code>echo</code>-Befehl erzeugt eine Ausgabe. Der String <code>"Dies ist ein
            Beispiel."</code> wird in das <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument (ohne die
        doppelten Anführungszeichen) integriert. Die Ausgabe ist auf der rechten Seite zu sehen.
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
echo "Dies ist ein Beispiel.";
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
echo "Dies ist ein Beispiel.";
?>
&lt;/body>
&lt;/html>
</code></pre>
        </div>
    </div>
    <div class="notification is-danger">
        Zwischen dem Schlüsselwort <code>echo</code> und dem String muss zwingend ein Leerzeichen notiert werden.
        Strings werden wie in Python auch durch <b>zwei</b> doppelte Anführungszeichen (<code>"</code>) gekennzeichnet.
        Jede Verwendung von <code>echo</code> schliessen wir in <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> mit
        einem Semikolon (<code>;</code>) ab.
    </div>
    <h6 class="title is-6">Beispiel 2</h6>
    <p>
        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den Code auf der linken Seite als
        Eingabe. Es befindet sich ein <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Der
        Abschnitt wird verarbeitet. Das Ergebnis von 1 + 2 wird berechnet. Dies ist eine Zahl und diese wird automatisch
        in einen String umgewandelt. Der String <code>3</code> wird dann in das <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument
        integriert. Die Ausgabe ist auf der rechten Seite zu sehen.
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
echo 1+2;
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
echo 1 + 2;
?>
&lt;/body>
&lt;/html>
</code></pre>
        </div>
    </div>
    <h6 class="title is-6">Beispiel 3</h6>
    <p>
        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den Code auf der linken Seite als
        Eingabe. Es befindet sich ein <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Der
        Abschnitt wird verarbeitet. Der String beinhaltet <abbr title="Hypertext Markup Language">HTML</abbr>. Für den
        <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter ist dies ein Text wie "jeder andere" auch. Der
        String <code>"Das ist &lt;b>wichtig&lt;/b>!"</code> wird dann in das <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument
        integriert. Die Ausgabe ist auf der rechten Seite zu sehen. Erst der Browser interpretiert das <abbr
                title="Hypertext Markup Language">HTML</abbr>-Dokument und stellt es grafisch dar.
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
echo "Das ist &lt;b>wichtig&lt;/b>!";
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
echo "Das ist &lt;b>wichtig&lt;/b>!";
?>
&lt;/body>
&lt;/html>
</code></pre>
        </div>
    </div>
    <div class="notification is-info">
        Mit <code>echo</code> können wir <abbr title="Hypertext Markup Language">HTML</abbr>-Elemente dynamisch erzeugen
        und in die Ausgabe integrieren. Wir notieren <abbr title="Hypertext Markup Language">HTML</abbr>-Elemente und
        Attribute einfach als String in den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt und geben den
        String mit <code>echo</code> aus.
    </div>
</div>