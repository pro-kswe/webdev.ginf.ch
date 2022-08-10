<?php
global $base;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: PHP Bedingte Anweisungen</title>
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
            <span class="anchor" id="bedingteAnweisungen">&nbsp;</span>
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "bedingteAnweisungen";
                    include("../php_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Bedingte Anweisungen</h4>
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
                                        Wie in Python können auch in <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr> bedingte Anweisungen
                                        eingesetzt werden. Damit
                                        kann man einen Codeabschnitt unter einer Bedingung ausführen. In <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr> werden die Befehle,
                                        welche unter der Bedingung ausgeführt werden sollen, durch <b>geschweifte
                                            Klammern</b>
                                        gekennzeichnet (<code>{</code> und <code>}</code>).
                                    </p>
                                    <p>Syntax</p>
                                </div>
                                <div class="block">
                                    <h6 class="title is-6">Beispiel 1</h6>
                                    <p>
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den
                                        Code auf der linken Seite als Eingabe. Es befindet sich ein <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Dieser
                                        Abschnitt wird durch den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        verarbeitet. Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        speichert die Zahl 10 in der Variablen <code>$zahl</code> ab. Anschliessend
                                        werden die Bedingungen geprüft. Da die zweite Bedingung (<code>$zahl < 20</code>)
                                        zutrifft, wird die Zeile in den geschweiften Klammern ausgeführt. Auf der
                                        rechten Seite befindet sich das Ergebnis des <abbr
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
$zahl = 10;
if ($zahl < 10) {
    echo "Unter 10!";
} elseif ($zahl < 20) {
    echo "10 - 19!";
} else {
    echo "20 oder mehr!";
}
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
$zahl = 10;
if ($zahl < 10) {
    echo "Unter 10!";
} elseif ($zahl < 20) {
    echo "10 - 19!";
} else {
    echo "20 oder mehr!";
}
?>
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
                                    </div>
                                    <p>
                                        Die Bedingung muss in runden Klammern (<code>(</code> und <code>)</code>)
                                        notiert werden. Für die Bedingung stehen die üblichen Operatoren zur Verfügung:
                                    </p>
                                    <ul>
                                        <li>Vergleichsoperatoren: <code>==</code>, <code>!=</code>, <code>&lt;</code>,
                                            <code>&lt;=</code>,<code>></code>, <code>>=</code></li>
                                        <li>Verknüpfungsoperatoren: <code>and</code>, <code>or</code></li>
                                    </ul>
                                    <p>
                                        Die Bedingung muss vollständig in den runden Klammern notiert werden.
                                    </p>
                                    <h6 class="title is-6">Beispiel 2</h6>
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
$zahl = rand(1, 20);
if ($zahl >= 10 and $zahl <= 20) {
    echo "Treffer!";
} else {
    echo "Daneben!";
}
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
$zahl = rand(1, 20);
if ($zahl >= 10 and $zahl <= 20) {
    echo "Treffer!";
} else {
    echo "Daneben!";
}
?>
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
                                    </div>
                                    <div class="notification is-info">
                                        <p>
                                            Für bedingte Anweisungen ist <code>elseif</code> und <code>else</code>
                                            optional.
                                        </p>
                                    </div>
                                    <p>
                                        Eine bedingte Anweisung kann auch über mehrere <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitte
                                        notiert werden. Zwischen den <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitten kann
                                        <abbr title="Hypertext Markup Language">HTML</abbr> notiert werden. Es ist
                                        auf die korrekte Notation der Klammern zu achten. <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Code, welcher
                                        innerhalb von geschweiften Klammern steht, wird auch nur dann ausgegeben,
                                        wenn die Bedingung zutrifft (auch wenn der <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Code sich ausserhalb
                                        von einem <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt befindet).
                                    </p>
                                    <h6 class="title is-6">Beispiel 3</h6>
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
$zahl = rand(1, 20);
if ($zahl >= 10 and $zahl <= 20) {
?>
  &lt;b>Treffer!&lt;/b>
&lt;?php
} else {
    echo "Daneben!";
}
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
$zahl = rand(1, 20);
if ($zahl >= 10 and $zahl <= 20) {
?>
  &lt;b>Treffer!&lt;/b>
<?php
} else {
    echo "Daneben!";
}
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