<?php
global $base;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: PHP Variablen</title>
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
            <span class="anchor" id="variablen">&nbsp;</span>
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "Variablen";
                    include("../php_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Variablen</h4>
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
                                        Variablen stellen auch in <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>
                                        einen Speicherplatz mit einem Namen dar. Im Vergleich zu Python, beginnt in
                                        <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> einen Variablennamen immer
                                        mit dem Dollarzeichen (<code>$</code>). Es gelten sonst die üblichen Regeln für
                                        die Benennung von Variablennamen. Bitte denken Sie auch hier an die Clean Code
                                        -Regeln. Variablen "leben" innerhalb einer <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei. Nachdem der <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter den <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Code verarbeitet hat,
                                        sind alle Variablen "gelöscht". Eine <b>Zuweisung</b> erfolgt, wie auch in
                                        Python, mit
                                        dem Gleichheitszeichen (<code>=</code>).
                                    </p>
                                    <p>Syntax</p>
                                </div>
                                <pre><code>$Variablenname = AUSDRUCK;</code></pre>
                                <div class="notification is-danger">
                                    Eine Zuweisung schliessen wir mit einem Semikolon (<code>;</code>) ab.
                                </div>
                                <div class="block">
                                    <h6 class="title is-6">Beispiel 1</h6>
                                    <p>
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den
                                        Code auf der linken Seite als Eingabe. Es befindet sich ein <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Dieser
                                        Abschnitt wird durch den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        verarbeitet. Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        speichert die zwei Zahlen in zwei Variablen ab. Anschliessend wird der Inhalt
                                        der Variablen mit <code>echo</code> ausgegeben. Auf der rechten Seite befindet
                                        sich das Ergebnis des <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreters.
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
$meineZahl = 42;
$nochEineZahl = 43;
echo $meineZahl;
echo "&lt;br>";
echo $nochEineZahl;
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
$meineZahl = 42;
$nochEineZahl = 43;
echo $meineZahl;
echo "&lt;br>";
echo $nochEineZahl;
?>
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
                                    </div>
                                    <div class="notification is-info">
                                        <figure class="image is-pulled-right" style="width: 200px; height: 200px;">
                                            <img src="../img/camelcase.png" alt="CamelCase">
                                        </figure>
                                        <p>
                                            Variablen sind in <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> <b>case
                                                sensitive</b>. Dies bedeutet, dass Gross- und Kleinschreibung
                                            unterschieden
                                            wird. Variablenamen werden in <abbr
                                                    title="PHP: Hypertext Preprocessor">PHP</abbr> typischerweise gemäss
                                            der
                                            <b>Camel Case</b> Konvention notiert:
                                        </p>
                                        <ul>
                                            <li><code>$zahl</code></li>
                                            <li><code>$meineZahl</code></li>
                                            <li><code>$oldHtmlFile</code></li>
                                            <li><code>$temperaturInCelsius</code></li>
                                        </ul>
                                    </div>
                                    <h6 class="title is-6">Beispiel 2</h6>
                                    <p>
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den
                                        Code auf der linken Seite als Eingabe. Es befindet sich ein <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Dieser
                                        Abschnitt wird durch den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        verarbeitet. Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        speichert einen String (<code>"Gelb"</code>) in einer Variablen ab.
                                        Anschliessend wird der Inhalt der Variablen mit <code>echo</code> ausgegeben.
                                        Dabei erkennt der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter,
                                        dass innerhalb des Strings eine Variable verwendet wird. Bei der Ausgabe wird
                                        die Variable deshalb durch den gespeicherten Wert ersetzt.
                                        Auf der rechten Seite befindet sich das Ergebnis des <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreters.
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
$meineFarbe = "Gelb";
echo "Lieblingsfarbe: $meineFarbe";
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
$meineFarbe = "Gelb";
echo "Lieblingsfarbe: $meineFarbe";
?>
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
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