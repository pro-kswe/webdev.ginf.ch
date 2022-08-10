<?php
global $base;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: CSS Klassen</title>
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
            <span class="anchor" id="klassen">&nbsp;</span>
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "Klassen";
                    include("../css_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Klassen</h4>
                        </div>
                        <div class="column is-6">
                            <?php
                            include("../css_breadcrumbs.php");
                            ?>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="content">
                            <div class="box">
                                <div class="block">
                                    <p>
                                        In <abbr title="Cascading Style Sheets">CSS</abbr> gibt verschiedene
                                        Möglichkeiten, wie man ein <abbr title="Hypertext Markup Language">HTML</abbr>-Element
                                        stylen kann. Modernes Webdesign verwendet Klassendeklarationen (auch
                                        <code>class</code>-Selektoren genannnt). Damit
                                        lassen sich mehrere Elemente identisch stylen. Sie können somit recht einfach
                                        mehreren Überschriften eine rote Schriftart verpassen. Um eine
                                        Klassendeklaration zu verwenden, müssen Sie in der <abbr
                                                title="Cascading Style Sheets">CSS</abbr>-Datei
                                        zunächst eine neue Klasse (eng. class) definieren. Eine Klasse beinhaltet die
                                        gewünschten Style-Eigenschaften. Dann muss man den Style auf ein <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Element anwenden.
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <pre><code>.header {
    color: cornflowerblue;
    background-color: gold;
    text-align: center;
}
</code></pre>
                                    <p>
                                        Anschliessend muss man den Style auf ein <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Element anwenden.
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <pre><code>&lt;h1 class="header">Überschrift&lt;/h1></code></pre>
                                    <h6 class="title is-6">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#deklaration">Deklaration</a>
                                        <a class="tag" href="#link"><code>link</code></a>
                                        <a class="tag" href="#class"><code>class</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("deklaration.php"); ?>
                            <?php include("html_link.php"); ?>
                            <?php include("html_class.php"); ?>
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