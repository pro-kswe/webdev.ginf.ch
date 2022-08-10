<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("../head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: Projekte</title>
</head>
<body class="has-navbar-fixed-top">
<header>
    <?php
    include("../header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $is_active = "";
                    include("projekte_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="projekte">&nbsp;</span>
                    <div class="content">
                        <h4 class="title is-4">Projekte<span class="tag is-info is-pulled-right">
                                <a class="has-text-white" href="#lernziele">Lernziele</a></span>
                        </h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Übersicht</h5>
                                <p>
                                    Sie werden Ihre eigene Website in <b>drei</b> Schritten erstellen. Dabei werden Sie
                                    verschiedene Technologien einsetzen:
                                </p>
                                <ul>
                                    <li>Teil 1: Eine Website mit HTML erstellen</li>
                                    <li>Teil 2: Eine Website mit CSS stylen</li>
                                    <li>Teil 3: Webprogrammierung mit <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr> und SQL
                                    </li>
                                </ul>
                                <p>
                                    Die Projektteile sind aufeinander abgestimmt und bauen jeweils auf dem vorherigen
                                    Schritt auf. Sie erweitern somit Ihre Website kontinuierlich mit weiteren
                                    Funktionalitäten.
                                </p>
                            </div>
                            <div class="block">
                                <span class="anchor" id="lernziele"></span>
                                <h5 class="title is-5">Lernziele</h5>
                                <ul>
                                    <li>
                                        Sie erstellen Ihre eigene Website mit <abbr title="Hypertext Markup Language">HTML</abbr>.
                                    </li>
                                    <li>
                                        Sie stylen Ihre eigene Website mit einem <abbr title="Cascading Style Sheets">CSS</abbr>-Framework.
                                    </li>
                                </ul>
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
    include("../footer.php");
    ?>
</footer>
</body>
</html>