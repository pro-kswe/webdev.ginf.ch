<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Rendering</title>
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
                    $isActive = "Rendering";
                    include("../html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="rendering">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Rendering</h4>
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
                                        Ein Browser ist in der Lage <abbr
                                                title="Hypertext Markup Language">HTML</abbr> anzuzeigen. Die
                                        Browser-Engine
                                        interpretiert dabei
                                        die Elemente und Attribute: Sie kennt die Bedeutung der Tags und wandelt diese
                                        in die
                                        entsprechenden grafischen Darstellungen um. Dieser
                                        Vorgang wird <abbr title="Hypertext Markup Language">HTML</abbr>-Rendering
                                        genannt. Wenn
                                        Sie im Internet surfen, dann lädt der Browser den Inhalt der entsprechenden
                                        <abbr title="Hypertext Markup Language">HTML</abbr>-Dokumente auf Ihren Computer und die Browser-Engine das <abbr
                                                title="Hypertext Markup Language">HTML</abbr>. Dies geschieht ganz
                                        automatisch.
                                        Oft verwenden verschiedene Browser dieselbe Engine:
                                    </p>
                                    <ul>
                                        <li>Blink ist eine Browser-Engine und wird von Chrome, Opera und Microsoft Edge
                                            benutzt.
                                        </li>
                                        <li>Webkit ist eine Browser-Engine und kommt bei Safari zum Einsatz.</li>
                                        <li>Gecko ist eine Browser-Engine und wird bei Mozilla Firefox verwendet.</li>
                                    </ul>
                                    <div class="notification is-danger">
                                        <abbr title="Hypertext Markup Language">HTML</abbr> definiert <b>nicht</b> das
                                        Aussehen
                                        einer Webseite. Es wird verwendet, um die Webseite semantisch zu strukturieren.
                                        Die
                                        grafische Darstellung wird durch den Browser durchgeführt. Er benutzt eine
                                        Standarddarstellung für die <abbr title="Hypertext Markup Language">HTML</abbr>-Elemente.
                                        Mit
                                        <a href="/css/css_main.php#css"><abbr title="Cascading Style Sheets">CSS</abbr></a>
                                        kann
                                        man die Visualisierungen definieren.
                                    </div>
                                    <h6 class="title is-6 mt-5">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#platz">Platz</a>
                                        <a class="tag" href="#robustheit">Robustheit</a>
                                        <a class="tag" href="#standards">Standards</a>
                                    </div>
                                </div>
                            </div>
                            <?php include("rendering_platz.php"); ?>
                            <?php include("rendering_robustheit.php"); ?>
                            <?php include("rendering_standards.php"); ?>
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