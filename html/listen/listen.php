<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Listen</title>
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
                    $isActive = "Listen";
                    include("../html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="listen">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Listen</h4>
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
                                        Es gibt zwei Listentypen in <abbr title="Hypertext Markup Language">HTML</abbr>.
                                        Man
                                        kann Elemente entweder unsortiert oder sortiert auflisten. Sortierte Listen
                                        werden
                                        typischerweise durch Nummern (beginnend mit 1.) dargestellt. Unsortierte Listen
                                        werden meist mit Aufzählungspunkte (eng. bullet points) visualisiert. Man kann
                                        mehrere Listen verschachteln und beide Listen auch kombinieren.
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <p>Code</p>
                                    <pre><code>&lt;ul>
    &lt;li>Apfel&lt;/li>
    &lt;li>Birne&lt;/li>
    &lt;li>Kiwi&lt;/li>
&lt;/ul>
</code></pre>
                                    <p>Rendering</p>
                                    <div style="all: initial;">
                                        <ul>
                                            <li>Apfel</li>
                                            <li>Birne</li>
                                            <li>Kiwi</li>
                                        </ul>
                                    </div>
                                    <h6 class="title is-6 mt-5">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#ul"><code>ul</code></a>
                                        <a class="tag" href="#ol"><code>ol</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("ul_element.php"); ?>
                            <?php include("ol_element.php"); ?>
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