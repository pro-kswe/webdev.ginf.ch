<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Webseitenstruktur</title>
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
                    $isActive = "Struktur";
                    include("../html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="struktur">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Webseitenstruktur</h4>
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
                                        <abbr title="Hypertext Markup Language">HTML</abbr> stellt Elemente zur
                                        Verfügung,
                                        um eine Webseite semantisch zu strukturieren. Diese Elemente werden nicht
                                        <i>direkt</i> durch den Browser visuell dargestellt. Sie dienen mehr dazu, den
                                        Inhalt der Webseite in Funktionalitäten (wie zum Beispiel Header, Footer oder
                                        Menü)
                                        einzuteilen. Davon können auch Technologien, welche ein barrierefreies Arbeiten
                                        am
                                        Computer ermöglichen (zum Beispiel Screenreader) profitieren. Die Elemente
                                        können
                                        auch mit <abbr title="Cascading Style Sheets">CSS</abbr> visuell gestaltet
                                        werden
                                        (etwa die Hintergrundfarbe).
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;!-- Weitere Elemente -->
&lt;/head>
&lt;body>
&lt;header>
    &lt;!-- Überschrift, Logo, ... -->
    &lt;nav>
        &lt;!-- Menü-Elemente -->
    &lt;/nav>
&lt;/header>
&lt;main>
    &lt;section>
        &lt;!-- Inhalt -->
    &lt;/section>
    &lt;section>
        &lt;!-- Inhalt -->
    &lt;/section>
&lt;/main&gt;
&lt;footer>
    &lt;!-- Autor, Impressum, Datenschutz, ... -->
&lt;/footer&gt;
&lt;/body>
&lt;/html>
</code></pre>
                                    <p>
                                        Verwenden Sie für jede Webseite eine semantische Struktur.
                                    </p>
                                    <h6 class="title is-6">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#header"><code>header</code></a>
                                        <a class="tag" href="#nav"><code>nav</code></a>
                                        <a class="tag" href="#main"><code>main</code></a>
                                        <a class="tag" href="#section"><code>section</code></a>
                                        <a class="tag" href="#footer"><code>footer</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("header_element.php"); ?>
                            <?php include("nav_element.php"); ?>
                            <?php include("main_element.php"); ?>
                            <?php include("section_element.php"); ?>
                            <?php include("footer_element.php"); ?>
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