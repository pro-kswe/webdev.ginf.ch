<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Links</title>
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
                    $isActive = "Links";
                    include("../html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="links">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Links</h4>
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
                                        Links machen einen <i>normalen</i> Text zu einem Hypertext. Mit Links werden
                                        Verweise zu anderen Webseiten realisiert. Man kann auch innerhalb einer
                                        Webseite einen Link setzen. Link ist eine Abkürzung für Hyperlink. Mit einem
                                        Link
                                        kann man neben einem <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument
                                        auch andere Dateien <i>verlinken</i> und so zum Beispiel einen Download
                                        anbieten.
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <p>Code</p>
                                    <pre><code>&lt;a href="http://info.cern.ch/hypertext/WWW/TheProject.html">
Hier geht es zur ersten Website des World Wide Webs...&lt;/a>
</code></pre>
                                    <p>Rendering</p>
                                    <div style="all: initial;">
                                        <a class="default-link"
                                           href="http://info.cern.ch/hypertext/WWW/TheProject.html">
                                            Hier geht es zur ersten Website des World Wide Webs...
                                        </a>
                                    </div>
                                    <h6 class="title is-6 mt-5">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#a"><code>a</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("a_element.php"); ?>
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