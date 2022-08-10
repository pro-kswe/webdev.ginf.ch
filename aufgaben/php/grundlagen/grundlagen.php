<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: Aufgaben PHP Grundlagen</title>
    <?php include("../../../head.php"); ?>
</head>
<body class="has-navbar-fixed-top">
<header>
    <?php
    include("../../../header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "AufgabenPhpGrundlagen";
                    include("../../aufgaben_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="aufgabenPhpGrundlagen">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">PHP-Grundlagen</h4>
                        </div>
                        <div class="column is-6">
                            <?php
                            include("../../aufgaben_breadcrumbs.php");
                            ?>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="content">
                            <div class="box">
                                <div class="block">
                                    <p class="content">
                                        Hier finden Sie sechs Programmieraufgaben. Für jede Aufgabe gibt es eine Vorlage
                                        (Template). Es werden folgende Themen behandelt:
                                    </p>
                                    <ul>
                                        <li>Ausgabe</li>
                                        <li>Variablen</li>
                                        <li>Funktionen</li>
                                        <li>Bedingte Anweisungen</li>
                                    </ul>
                                    <h6 class="title is-6">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#aufgabe1">Aufgabe 1</a>
                                        <a class="tag" href="#aufgabe2">Aufgabe 2</a>
                                        <a class="tag" href="#aufgabe3">Aufgabe 3</a>
                                        <a class="tag" href="#aufgabe4">Aufgabe 4</a>
                                        <a class="tag" href="#aufgabe5">Aufgabe 5</a>
                                        <a class="tag" href="#aufgabe6">Aufgabe 6</a>
                                    </div>
                                </div>
                            </div>
                            <?php include("aufgabe1.php"); ?>
                            <?php include("aufgabe2.php"); ?>
                            <?php include("aufgabe3.php"); ?>
                            <?php include("aufgabe4.php"); ?>
                            <?php include("aufgabe5.php"); ?>
                            <?php include("aufgabe6.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <?php
    include("../../../footer.php");
    ?>
</footer>
</body>
</html>