<?php
global $base;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: PHP Ausgabe</title>
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
            <span class="anchor" id="ausgabe">&nbsp;</span>
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "Ausgabe";
                    include("../php_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Ausgabe</h4>
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
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter kann mit
                                        <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Code, <abbr
                                                title="Cascading Style Sheets">CSS</abbr>-Code und <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Code in einer <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei umgehen. <abbr
                                                title="Hypertext Markup Language">HTML</abbr> und <abbr
                                                title="Cascading Style Sheets">CSS</abbr>-Code wird einfach "ignoriert",
                                        das heisst der <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter übernimmt für
                                        die Ausgabe den Code 1:1.
                                    </p>
                                    <h6 class="title is-6">Beispiel 1</h6>
                                    <p>
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den
                                        Code
                                        auf der linken Seite als Eingabe. Der Code auf der rechten Seite wird als
                                        Ausgabe
                                        produziert (1:1 Kopie).
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
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
                                    </div>
                                    <p>
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter verarbeitet
                                        alle <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter-Befehle
                                        innerhalb der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Tags <code>&lt;?php</code>
                                        und <code>?></code> (<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt).
                                        Darin, und nur darin, können <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Befehle notiert werden.
                                        Es können beliebig viele <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Tags
                                        in einer <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei notiert
                                        werden. Die <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Tags werden von
                                        oben nach unten verarbeitet.
                                    </p>
                                    <h6 class="title is-6">Beispiel 2</h6>
                                    <p>
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den
                                        Code auf der linken Seite als Eingabe. Es befindet sich ein <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt im Code. Dieser
                                        Abschnitt wird durch den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        verarbeitet. Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        berechnet die Summe aus 1 und 2. Die rechte Seite beinhaltet die Ausgabe des
                                        <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreters. Dort taucht
                                        das Ergebnis der Addition jedoch <b>nicht</b> auf. Dies ist kein Tippfehler,
                                        sondern ein <b>Programmierfehler</b>. Der <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter berechnet die
                                        Addition, produziert aber keine Ausgabe. Es fehlt der Befehl für die Ausgabe
                                        (<code>echo</code>).
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
1 + 2;
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
1 + 2;
?>
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
                                    </div>
                                    <h6 class="title is-6">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#echo"><code>echo</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("php_echo.php"); ?>
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