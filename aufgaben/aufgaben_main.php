<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("../head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: Aufgaben</title>
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
                    include("aufgaben_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="aufgaben">&nbsp;</span>
                    <div class="content">
                        <h4 class="title is-4">Aufgaben<span class="tag is-info is-pulled-right">
                                <a class="has-text-white" href="#loesungen">Lösungen</a></span>
                        </h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Übersicht</h5>
                                <p>
                                    Hier finden Sie Übungsaufgaben zu folgenden Themen:
                                </p>
                                <ul>
                                    <li><abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Grundlagen</li>
                                </ul>
                            </div>
                            <div class="block">
                                <span class="anchor" id="loesungen"></span>
                                <h5 class="title is-5">Lösungen</h5>
                                <ul>
                                    <li>
                                        TODO
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