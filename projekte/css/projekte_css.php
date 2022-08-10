<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: Projekte (Teil 2: CSS)</title>
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
                    $isActive = "projekteCss";
                    include("../projekte_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="projekteCss">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Projekt: Teil 2 (CSS)</h4>
                        </div>
                        <div class="column is-6">
                            <?php
                            include("../projekte_breadcrumbs.php");
                            ?>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="content">
                            <div class="box">
                                <div class="block">
                                    <p>
                                        Stylen Sie Ihre eigene Website mit dem <abbr
                                                title="Cascading Style Sheets">CSS</abbr> Framework <a
                                                href="https://bulma.io">Bulma</a>. Es müssen folgende Bedingungen
                                        eingehalten werden:
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Alle Webseiten sind <b>einheitlich</b> gestylt. Alle <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Elemente erhalten
                                                somit entweder direkt oder indirekt ein Styling. Verwenden Sie auf jeden
                                                Fall für folgende <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Elemente eine
                                                <abbr
                                                        title="Cascading Style Sheets">CSS</abbr>-Klasse:
                                            </p>
                                            <ul>
                                                <li><code>header</code></li>
                                                <li><code>section</code></li>
                                                <li><code>footer</code></li>
                                                <li><code>table</code></li>
                                                <li><code>form</code> und die verschachtelten Elemente</li>
                                            </ul>
                                            <p>
                                                Diese Liste ist nicht abschliessend.
                                            </p>
                                            <div class="notification is-info">
                                                Sie müssen sich auf die vorgegebenen Styles beschränken. In der
                                                einfacheren Version von Bulma, können Sie die Variablen für Schriftart,
                                                Schriftfarbe etc. nicht ändern. Was jedoch möglich ist, eigene <abbr
                                                        title="Cascading Style Sheets">CSS</abbr>-Klassen definieren und
                                                verwenden. Einfach eine separate <abbr
                                                        title="Cascading Style Sheets">CSS</abbr>-Datei erstellen und
                                                auch verlinken (<code>link</code>-Element im <code>head</code>-Element
                                                verwenden).
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                Es gibt eine einheitliche Navbar auf <b>allen</b> Webseiten. Der Inhalt der
                                                Navbar ist logisch aufgebaut und immer sichtbar.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Die Website ist auch auf mobilen Endgeräten (Smartphone und Tablet)
                                                ansprechend gestaltet (Responsive Design). Denken Sie an die Navbar,
                                                welche auch auf kleineren Bildschirmen funktionieren soll. Bulma bietet
                                                hier eine Lösung an. Sie dürfen JavaScript dazu benutzen. Fügen Sie den
                                                "Responsive Viewport Meta Tag" hinzu (<a
                                                        href="https://bulma.io/documentation/overview/start/#code-requirements">Code
                                                    Requirements</a>).
                                            </p>
                                        </li>
                                        <li>
                                            Passen Sie die Bilder für das Web an. Ein hochauflösendes Bild, welches
                                            viel Speicherplatz benötigt, ist nicht geeignet. Verändern Sie die
                                            Auflösung (mit einem externen Programm wie zum Beispiel Photoshop, Paint
                                            oder Vorschau), laden Sie das Bild erneut auf den Remote Host und passen Sie
                                            die Position und Grösse dann noch mit <abbr
                                                    title="Cascading Style Sheets">CSS</abbr> an.
                                        </li>
                                        <li>
                                            <p>
                                                Die <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Dokumente sind
                                                fehlerfrei (W3C konform, siehe <a href="https://validator.w3.org">https://validator.w3.org</a>).
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Sie führen das Projekt <b>selbstständig</b> durch. Das Kopieren einer
                                                vollständigen Website ist nicht erlaubt (kein Plagiat).
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Räumen Sie Ihren <b>Remote Host</b> auf. Unnötige Dateien von Ihrer
                                                Website (damit sind nicht die Dateien in den "Demo-Ordnern" gemeint oder
                                                die Datei <code>.ftpquota</code>) sollen gelöscht werden. Sie können mit
                                                einem Rechtsklick auf die Datei und dann "Delete" auswählen.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Zusätzlicher <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>/JavaScript-Code
                                                ist erlaubt, jedoch nicht notwendig. Falls der
                                                <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>/JavaScript-Code
                                                dazu führt, dass die Website nicht funktioniert, die Styles nicht
                                                ordentlich sind oder ähnliches, dann erfolgt ein Punktabzug.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Sie dürfen <abbr title="Hypertext Markup Language">HTML</abbr>-Elemente
                                                austauschen und hinzufügen. Sie dürfen nicht
                                                den Inhalt komplett austauschen. Kleinere und Anpassungen sind okay.
                                            </p>
                                        </li>
                                    </ul>
                                    <p>
                                        Sie finden <a href="http://webdev.ginf.ch/demo/css/index.html">hier</a>
                                        ein Beispiel einer Website (Reiseinformationen über Zürich).
                                    </p>
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