<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("../head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML</title>
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
                    include("html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="html">&nbsp;</span>
                    <div class="content">
                        <h4 class="title is-4">HTML<span class="tag is-info is-pulled-right">
                                <a class="has-text-white" href="#lernziele">Lernziele</a></span>
                        </h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Was ist HTML?</h5>
                                <figure class="image is-pulled-right" style="width: 200px; height: 200px;">
                                    <img src="bilder/img/html5_logo.png" alt="HTML 5 Logo">
                                </figure>
                                HTML (Hypertext Markup Language) ist eine Sprache, die verwendet wird, um Webseiten
                                für
                                das WWW (World Wide Web) zu strukturieren und den Inhalten eine Bedeutung zu geben
                                (Semantik). Es handelt sich bei HTML um eine textbasierte Auszeichnungssprache
                                (Markup
                                Language). Es ist <b>keine</b> Programmiersprache.
                            </div>
                            <div class="block">
                                <h5 class="title is-6">Wie gibt man dem Inhalt eine Bedeutung?</h5>
                                Man verwendet <b>vorgegebenen</b> "Befehle", um in einem Text ein Wort als besonders
                                wichtig zu markieren oder als eine Abkürzung zu kennzeichnen. Man kann auch einen
                                ganzen
                                Abschnitt als Zitat markieren oder ein Wort zu einem Link umwandeln. Damit wird der
                                Text
                                oder Textstellen mit weiteren Bedeutungen versehen. Man sagt, der Text wird
                                semantisch
                                erweitert.
                            </div>
                            <div class="block">
                                <h5 class="title is-6">Wie strukturiert man eine Webseite?</h5>
                                Es gibt auch <b>vorgegebenen</b> "Befehle", um eine ganze Webseite zu gliedern. Man
                                teilt den Inhalt in Abschnitte ein, fügt Überschriften hinzu oder setzt den Text als
                                Paragraphen um. Oder vielleicht möchte man Informationen als Liste oder Tabelle
                                anordnen. Dies sind Beispiele für die Struktur einer Webseite. Die Gliederung hat
                                nicht
                                immer einen visuellen Effekt. Screenreader können jedoch von vielen Strukturen
                                profitieren, wenn Sie eine Webseite analysieren und zum Vorlesen aufbereiten. Auch
                                das
                                <a href="/css/css_main.php#css">Styling mit <abbr
                                            title="Cascading Style Sheets">CSS</abbr></a> profitiert von einer gut
                                strukturieren Webseite.
                            </div>
                            <div class="block">
                                <h6 class="title is-6"><abbr title="Hypertext Markup Language">HTML</abbr>-Dokumente</h6>
                                Ein <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument ist eine Datei,
                                welche
                                <abbr title="Hypertext Markup Language">HTML</abbr>-Code beinhaltet. Die Datei
                                besitzt
                                die Dateiendung <code>.html</code>.
                            </div>
                            <div class="block">
                                <h6 class="title is-6">Was ist ein Browser?</h6>
                                Ein Browser ist ein Computerprogramm zum Navigieren im <abbr
                                        title="World Wide Web">WWW</abbr> und Anzeigen von Webseiten.
                                Ein Browser lädt die angeforderte Webseite auf den Computer, interpretiert deren
                                Inhalt
                                und stellt den Inhalt grafisch dar. Über die Internetadresse weiss der Browser
                                welche
                                Webseite angezeigt werden muss. Beispiel für Browser sind Mozilla Firefox, Google
                                Chrome, Opera und Safari.
                            </div>
                            <div class="block">
                                <span class="anchor" id="lernziele"></span>
                                <h5 class="title is-5">Lernziele</h5>
                                <ul>
                                    <li>
                                        Sie erklären was ein Browser ist und geben Beispiele für moderne Browser.
                                    </li>
                                    <li>
                                        Sie erklären, was ein <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Dokument ist.
                                    </li>
                                    <li>
                                        Sie erklären das Zusammenspiel von Browser und <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Dokument.
                                    </li>
                                    <li>
                                        Sie erstellen ein <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Dokument zur
                                        Präsentation
                                        von Informationen.
                                    </li>
                                </ul>
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Links</h5>
                                <ul>
                                    <li>
                                        <a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics">
                                            MDN Web Docs: HTML Basics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://htmlreference.io/">htmlreference.io</a>
                                    </li>
                                    <li>
                                        <a href="https://wiki.selfhtml.org/wiki/HTML">SELFHTML: HTML</a>
                                    </li>
                                    <li>
                                        <a href="https://validator.w3.org/">W3C Markup Validation Service</a>
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