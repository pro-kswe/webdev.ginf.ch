<?php
global $base;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: Bulma</title>
    <?php include("../../head.php"); ?>
</head>
<body class="has-navbar-fixed-top">
<header>
    <?php
    include("../../header.php");
    ?>
</header>
<main>
    <section id="bulma" class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "Bulma";
                    include("../css_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Bulma</h4>
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
                                        Das Stylen von Webseiten kann sehr aufwendig sein. Ein <abbr
                                                title="Cascading Style Sheets">CSS</abbr>-Framework
                                        versucht das Styling zu vereinfachen. Typischerweise bietet ein
                                        <abbr title="Cascading Style Sheets">CSS</abbr>-Framework eine Menge von
                                        vorgefertigten Klassendeklarationen an. Man
                                        muss nur noch das <abbr title="Cascading Style Sheets">CSS</abbr>-Framework mit
                                        der <abbr title="Hypertext Markup Language">HTML</abbr>-Datei verknüpfen und die
                                        vorgegebenen <abbr title="Cascading Style Sheets">CSS</abbr>-Klassennamen
                                        einsetzen. Meist gibt es eine Website, welche
                                        die Styles vorstellt und die entsprechenden Klassennamen auflistet. Setzt man
                                        auf ein <abbr title="Cascading Style Sheets">CSS</abbr>-Framework spart man
                                        meist Zeit beim Stylen, verliert jedoch
                                        unter Umständen an Individualität. Das <abbr
                                                title="Cascading Style Sheets">CSS</abbr>-Framework gibt gewissermassen
                                        das Design vor und man passt nur noch kleine Aspekte an. Deshalb erhalten
                                        Website, die das gleiche <abbr title="Cascading Style Sheets">CSS</abbr>-Framework
                                        verwenden, meist einen sehr
                                        ähnlichen Style.
                                    </p>
                                    <div class="notification is-info">
                                        Ein Beispiel für ein <abbr title="Cascading Style Sheets">CSS</abbr>-Framework
                                        ist <b>Bulma</b> (<a href="https://www.bulma.io">www.bulma.io</a>). Es
                                        besteht aus zahlreichen <abbr title="Cascading Style Sheets">CSS</abbr>-Klassen
                                        und kann kostenfrei verwendet werden.
                                        Es unterstützt das Responsive Design, das heisst es gibt <abbr
                                                title="Cascading Style Sheets">CSS</abbr>-Klassen,
                                        sodass eine Webseite auf verschiedenen Geräten (zum Beispiel Notebook, Tablet
                                        oder Smartphone) ansprechend dargestellt wird.
                                    </div>
                                    <p>
                                        Wir listen hier nur ein paar Beispiele aus dem Framework auf. Eine ausführliche
                                        Dokumentation mit Beispielen finden Sie auf der Website des Frameworks unter <a
                                                href="http://bulma.io/documentation/">Dokumentation</a>.
                                    </p>
                                    <p>
                                        Schriftarten, Farben und Margin (dt. Abstände) und Padding (dt.
                                        <q>Polsterung</q>) sind unter <a href="https://bulma.io/documentation/helpers/">Helpers</a>
                                        zu finden.
                                    </p>
                                    <h6 class="title is-6">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#installation">Installation</a>
                                        <a class="tag" href="#ueberschriften">Überschriften</a>
                                        <a class="tag" href="#tabellen">Tabellen</a>
                                        <a class="tag" href="#formulare">Formulare</a>
                                    </div>
                                </div>
                            </div>
                            <?php include("installation.php"); ?>
                            <?php include("ueberschriften.php"); ?>
                            <?php include("tabellen.php"); ?>
                            <?php include("formulare.php"); ?>
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