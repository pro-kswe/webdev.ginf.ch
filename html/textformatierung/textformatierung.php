<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Textformatierung</title>
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
                    $isActive = "Textformatierung";
                    include("../html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="textformatierung">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Textformatierung</h4>
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
                                        Fliesstext kann in <abbr title="Hypertext Markup Language">HTML</abbr>
                                        formatiert
                                        werden. Man kann den Text strukturieren und auszeichnen, das heisst Textstellen
                                        hervorheben. Die Schriftart, die Schriftfarbe und ähnliche visuelle Gestaltungen
                                        werden <b>nicht</b> (mehr) durch <abbr
                                                title="Hypertext Markup Language">HTML</abbr> erzeugt. Dafür ist allein
                                        <abbr title="Cascading Style Sheets">CSS</abbr>
                                        zuständig.
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <p>Code</p>
                                    <pre><code>&lt;h1>Oberste Überschrift&lt;/h1>
&lt;p>Dies ist ein Absatz. Text kann &lt;b>hervorgehoben&lt;/b> sein.&lt;/p>
&lt;p>Noch ein Absatz. Text kann auch &lt;i>so&lt;i> vom Rest abgehoben werden.&lt;/p>
</code></pre>
                                    <p>Rendering</p>
                                    <div style="all: initial;">
                                        <h1>Oberste Überschrift</h1>
                                        <p>Dies ist ein Absatz. Text kann <b>hervorgehoben</b> sein.</p>
                                        <p>Noch ein Absatz. Text kann auch <i>so</i> vom Rest abgehoben werden.</p>
                                    </div>
                                    <h6 class="title is-6 mt-5">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#headings">Headings</a>
                                        <a class="tag" href="#paragraph"><code>p</code></a>
                                        <a class="tag" href="#b"><code>b</code></a>
                                        <a class="tag" href="#i"><code>i</code></a>
                                        <a class="tag" href="#br"><code>br</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("heading_elements.php"); ?>
                            <?php include("paragraph_element.php"); ?>
                            <?php include("b_element.php"); ?>
                            <?php include("i_element.php"); ?>
                            <?php include("br_element.php"); ?>
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