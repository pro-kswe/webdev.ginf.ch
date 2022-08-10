<?php
global $base;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: CSS</title>
    <?php include("../head.php"); ?>
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
                    include("css_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="css">&nbsp;</span>
                    <div class="content">
                        <h4 class="title is-4">CSS<span class="tag is-info is-pulled-right">
                                <a class="has-text-white" href="#lernziele">Lernziele</a></span>
                        </h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Was ist CSS?</h5>
                                <figure class="image is-pulled-right" style="height: 240px;">
                                    <img src="img/css_logo.png" alt="CSS 3 Logo" style="height: 100%">
                                </figure>
                                Beim Stylen von Webseiten geht es darum das Aussehen (z.B. Farben, Typografie,
                                Abstände)
                                von <abbr title="Hypertext Markup Language">HTML</abbr>-Elementen festzulegen.
                                Früher
                                hat man die Stylingmöglichkeiten von <abbr
                                        title="Hypertext Markup Language">HTML</abbr>
                                genutzt, heute verwendet man eine eigene Stylingsprache: <b>Cascading Style
                                    Sheets
                                    (CSS)</b>. Ziel ist es den Inhalt einer
                                Webseite
                                vom Aussehen einer Webseite zu trennen. Deshalb lautet die
                                Strategie: am Anfang erst einmal ohne <abbr
                                        title="Cascading Style Sheets">CSS</abbr>. Dies bedeutet man
                                strukturiert
                                die
                                Webseite (Überschriften, Tabellen, Aufzählungen, ...) zunächst und überlässt dem
                                Browser die Darstellung der Elemente (Standarddarstellung). Danach kommt dann
                                das
                                Styling zum Einsatz - also <abbr
                                        title="Cascading Style Sheets">CSS</abbr>. Es ist gewissermassen eine
                                Ergänzungssprache für <abbr title="Hypertext Markup Language">HTML</abbr> und
                                erlaubt
                                das beliebige Styling einzelner <abbr
                                        title="Hypertext Markup Language">HTML</abbr>-Elemente.
                                Man kann zum Beispiel festlegen, dass alle Überschriften 24 Punkt gross sind und
                                mit
                                einem grünen Rahmen versehen sind. Bei <abbr
                                        title="Cascading Style Sheets">CSS</abbr> gibt es zahlreiche (!)
                                Möglichkeiten für das Styling. Wir beschränken uns hier auf ausgewählte
                                Möglichkeiten.
                            </div>
                            <div class="block">
                                <h5 class="title is-5">CSS-Datei</h5>
                                <abbr title="Cascading Style Sheets">CSS</abbr> erlaubt es, Stile, Farben und
                                Formen zu
                                definieren. Diese Definitionen werden in einer separaten Style-Datei, der <abbr
                                        title="Cascading Style Sheets">CSS</abbr>-Datei definiert. Wie schon
                                <abbr
                                        title="Hypertext Markup Language">HTML</abbr> ist
                                auch <abbr title="Cascading Style Sheets">CSS</abbr> <b>keine</b>
                                Programmiersprache.
                                Eine <abbr title="Cascading Style Sheets">CSS</abbr>-Datei kann man dann in
                                beliebig viele <abbr
                                        title="Hypertext Markup Language">HTML</abbr>-Dateien einbinden. So
                                werden
                                einheitliche Stylevorgaben
                                möglich, und der <abbr
                                        title="Hypertext Markup Language">HTML</abbr>-Code wird von unnötigem
                                Ballast
                                befreit. Spätere Änderungen
                                am Design können so leicht durchgeführt werden. Möchte man z.B. die
                                Überschriften
                                ändern, dann muss man nur in der <abbr title="Cascading Style Sheets">CSS</abbr>-Datei
                                eine Anpassung vornehmen und nicht in
                                allen <abbr title="Hypertext Markup Language">HTML</abbr>-Dateien. <abbr
                                        title="Cascading Style Sheets">CSS</abbr>-Dateien haben die
                                Dateinamen-Erweiterung <code>.css</code>.
                                <figure class="image">
                                    <img style="width: 75%" src="img/css_html.png" alt="CSS und HTML Dateien">
                                </figure>
                            </div>
                            <div class="block">
                                <span class="anchor" id="lernziele"></span>
                                <h5 class="title is-5">Lernziele</h5>
                                <ul>
                                    <li>
                                        Sie erklären an einem Beispiel wozu man <abbr
                                                title="Cascading Style Sheets">CSS</abbr> verwenden kann.
                                    </li>
                                    <li>
                                        Sie erstellen eine <abbr
                                                title="Cascading Style Sheets">CSS</abbr>-Datei und verknüpfen diese mit
                                        einer <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Datei.
                                    </li>
                                    <li>
                                        Sie definieren eine <abbr
                                                title="Cascading Style Sheets">CSS</abbr>-Klasse und wenden diese Klasse
                                        auf ein <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Element an.
                                    </li>
                                </ul>
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Links</h5>
                                <ul>
                                    <li>
                                        <a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/CSS_basics ">
                                            MDN Web Docs: CSS Basics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://cssreference.io/">cssreference.io</a>
                                    </li>
                                    <li>
                                        <a href="https://wiki.selfhtml.org/wiki/CSS">SELFHTML: CSS</a>
                                    </li>
                                    <li>
                                        <a href="https://bulma.io">Bulma</a>
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