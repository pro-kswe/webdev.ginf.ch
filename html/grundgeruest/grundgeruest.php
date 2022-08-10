<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Grundgerüst</title>
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
                    $isActive = "Grundgerüst";
                    include("../html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="grundgeruest">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Grundgerüst</h4>
                        </div>
                        <div class="column is-6">
                            <?php
                            include("../html_breadcrumbs.php");
                            ?>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="content">
                            <div class="box">
                                <div class="block">
                                    <p>
                                        Jedes <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument verwendet ein
                                        paar grundlegende Elemente. Diese definieren noch nicht den Inhalt der Webseite.
                                        Sie
                                        dienen als Rahmen für den eigentlichen Inhalt und definieren ein paar
                                        Metainformationen.
                                    </p>
                                    <h6 class="title is-6">Grundgerüst</h6>
                                    <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;title>Reiseblog von Oliver&lt;/title>
&lt;/head>
&lt;body>
    &lt;!-- Inhalt -->
&lt;/body>
&lt;/html>
</code></pre>
                                    <p>
                                        Alle Elemente aus dem Grundgerüst sollten für <b>jede</b> Webseite notiert
                                        werden.
                                    </p>
                                    <h6 class="title is-6">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#doctype"><code>DOCTYPE</code></a>
                                        <a class="tag" href="#html"><code>html</code></a>
                                        <a class="tag" href="#head"><code>head</code></a>
                                        <a class="tag" href="#meta"><code>meta</code></a>
                                        <a class="tag" href="#title"><code>title</code></a>
                                        <a class="tag" href="#body"><code>body</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("doctype.php"); ?>
                            <?php include("html_element.php"); ?>
                            <?php include("head_element.php"); ?>
                            <?php include("body_element.php"); ?>
                            <?php include("meta_element.php"); ?>
                            <?php include("title_element.php"); ?>
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