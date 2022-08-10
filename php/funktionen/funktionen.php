<?php
global $base;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: PHP Funktionen</title>
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
            <span class="anchor" id="funktionen">&nbsp;</span>
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "Funktionen";
                    include("../php_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Funktionen</h4>
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
                                        Es gibt zahlreiche (eingebaute) Funktionen, welche man verwenden kann. Der
                                        Funktionsaufruf erfolgt wie in Python.
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <p>
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter erhält den
                                        Code auf der linken Seite als Eingabe. Der <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt beinhaltet die
                                        <code>phpversion</code>-Funktion. Beim Verarbeiten wird damit die eingesetzte
                                        <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Version (als String)
                                        ermittelt und zurückgegeben. Der Code auf der rechten Seite wird als Ausgabe
                                        produziert.
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
$version = phpversion();
echo "Version: $version";
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
$version = phpversion();
echo "Version: $version";
?>
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
                                    </div>
                                    <h6 class="title is-6">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#rand"><code>rand</code></a>
                                        <a class="tag" href="#date"><code>date</code></a>
                                        <a class="tag" href="#strlen"><code>strlen</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("php_rand.php"); ?>
                            <?php include("php_date.php"); ?>
                            <?php include("php_strlen.php"); ?>
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