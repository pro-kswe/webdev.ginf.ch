<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Syntax</title>
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
                    $isActive = "Syntax";
                    include("../html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="syntax">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Syntax</h4>
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
                                        <b>Was ist eine Auszeichnung?</b><br> Man erweitert die eigentlichen
                                        Informationen durch vorgegebene "Befehle". Dieser Prozess wird
                                        Auszeichnung genannt.<br><br>
                                        <b>Wie funktioniert die Auszeichnung?</b><br>
                                        Die <b>vorgegebenen</b> "Befehlen" werden <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Elemente genannt. Jedes
                                        Element
                                        hat eine Bedeutung (Semantik), die der Browser kennt und verarbeiten kann. Durch
                                        die
                                        Elemente wird die Anzeige im Browser definiert. Elemente haben zum Beispiel die
                                        Bedeutung "das ist eine Überschrift" oder "das ist ein Link". Dadurch kann der
                                        Browser
                                        die Inhalte unterschiedlich anzeigen.
                                    </p>
                                    <h6 class="title is-6 mt-5">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#syntaxElemente">Elemente</a>
                                        <a class="tag" href="#syntaxAttribute">Attribute</a>
                                    </div>
                                </div>
                            </div>
                            <?php include("syntax_elemente.php"); ?>
                            <?php include("syntax_attribute.php"); ?>
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