<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Tabellen</title>
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
                    $isActive = "Tabellen";
                    include("../html_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="tabellen">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Tabellen</h4>
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
                                        Tabellen spielten für einen gewissen Zeitraum eine wesentliche Rolle in der
                                        Webentwicklung. Man verwendete Tabellen nicht nur um Inhalte in Form von Zeile
                                        und
                                        Spalten darzustellen, sondern setzte Tabellen auch für die Webseitenstruktur
                                        ein.
                                        Man teilte die ganze Website in Tabellen auf und positionierte in den Zellen die
                                        individuellen Elemente der Webseite (Menü, Header, Footer etc.). Das moderne
                                        Webdesign sieht dies jedoch als einen veralteten und schlechten Stil an.
                                        Modernes
                                        Webdesign verwendet <abbr title="Hypertext Markup Language">HTML</abbr>-Elemente
                                        und
                                        <abbr title="Cascading Style Sheets">CSS</abbr> für das Layout. Tabellen können
                                        jedoch immer noch eingesetzt werden. Man fügt dann eine <abbr
                                                title="Hypertext Markup Language">HTML</abbr>-Tabelle ein, wenn der
                                        Inhalt tabellarisch dargestellt werden soll. Die Inhalte müssen dafür in Zeilen
                                        (eng. rows) und Spalten (eng. columns) aufgeteilt werden. Zeilen sind waagrecht
                                        angeordnet, Spalten senkrecht.
                                    </p>
                                    <figure class="image">
                                        <img style="width: 75%" src="img/tabelle.jpeg"
                                             alt="Tabelle mit Zeilen und Spalten">
                                    </figure>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <p>Code</p>
                                    <pre><code>&lt;table>
    &lt;caption>Klima!&lt;/caption>
    &lt;thead>
    &lt;tr>
        &lt;th>Monat&lt;/th>
        &lt;th>Min. / Max. &deg;C&lt;/th>
        &lt;th>Regentage&lt;/th>
    &lt;/tr>
    &lt;/thead>
    &lt;tbody>
    &lt;tr>
        &lt;td>Januar&lt;/td>
        &lt;td>-2,7 / 3,1&lt;/td>
        &lt;td>10,1&lt;/td>
    &lt;/tr>
    &lt;tr>
        &lt;td>Juli&lt;/td>
        &lt;td>13,2 / 24,7&lt;/td>
        &lt;td>11,5&lt;/td>
    &lt;/tr>
    &lt;tr>
        &lt;td>Dezember&lt;/td>
        &lt;td>-1,2 / 3,9&lt;/td>
        &lt;td>10,8&lt;/td>
    &lt;/tr>
    &lt;/tbody>
    &lt;tfoot>
    &lt;tr>
        &lt;td colspan="3">Alle Angaben sind Durchschnittswerte.&lt;/td>
    &lt;/tr>
    &lt;/tfoot>
&lt;/table>
</code></pre>
                                    <p>Rendering</p>
                                    <div style="all: initial;">
                                        <table style="width: initial; border-collapse: initial; border-spacing: initial">
                                            <caption>Klima!</caption>
                                            <thead>
                                            <tr>
                                                <th style="border: none; padding:initial; vertical-align: initial;">
                                                    Monat
                                                </th>
                                                <th style="border: none; padding:initial; vertical-align: initial;">
                                                    Min. / Max. °C
                                                </th>
                                                <th style="border: none; padding:initial; vertical-align: initial;">
                                                    Regentage
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    Januar
                                                </td>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    -2,7 / 3,1
                                                </td>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    10,1
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    Juli
                                                </td>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    13,2 / 24,7
                                                </td>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    11,5
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    Dezember
                                                </td>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    -1,2 / 3,9
                                                </td>
                                                <td style="border: none; padding:initial; vertical-align: initial;">
                                                    10,8
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td style="border: none; padding:initial; vertical-align: initial;"
                                                    colspan="3">
                                                    Alle Angaben sind Durchschnittswerte.
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="notification is-info mt-5">
                                        Ohne <abbr title="Cascading Style Sheets">CSS</abbr> rendert der Browser eine
                                        Tabelle ohne "Linien". Die Zeilen und Spalten werden jedoch ausgerichtet und
                                        einheitlich dargestellt. So sind die Zellen innerhalb einer Spalte mit dem
                                        gleichen
                                        Abstand visualisiert. Mit <abbr title="Cascading Style Sheets">CSS</abbr> kann
                                        man
                                        dann zum Beispiel einen Rand hinzufügen.
                                    </div>
                                    <figure class="image">
                                        <img style="width: 80%" src="img/tabelle_details.jpeg"
                                             alt="Tabelle und HTML-Elemente">
                                    </figure>
                                    <h6 class="title is-6 mt-5">Jump to ...</h6>
                                    <div class="tags">
                                        <a class="tag" href="#table"><code>table</code></a>
                                        <a class="tag" href="#caption"><code>caption</code></a>
                                        <a class="tag" href="#thead"><code>thead</code></a>
                                        <a class="tag" href="#tbody"><code>tbody</code></a>
                                        <a class="tag" href="#tfoot"><code>tfoot</code></a>
                                        <a class="tag" href="#tr"><code>tr</code></a>
                                        <a class="tag" href="#td"><code>td</code></a>
                                        <a class="tag" href="#th"><code>th</code></a>
                                        <a class="tag" href="#colspan"><code>colspan</code></a>
                                        <a class="tag" href="#rowspan"><code>rowspan</code></a>
                                    </div>
                                </div>
                            </div>
                            <?php include("table_element.php"); ?>
                            <?php include("caption_element.php"); ?>
                            <?php include("thead_element.php"); ?>
                            <?php include("tbody_element.php"); ?>
                            <?php include("tfoot_element.php"); ?>
                            <?php include("tr_element.php"); ?>
                            <?php include("td_element.php"); ?>
                            <?php include("th_element.php"); ?>
                            <?php include("span_attributes.php"); ?>
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