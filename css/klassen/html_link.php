<div class="box">
    <span class="anchor" id="link"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>link</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Selectors/Type_Class_and_ID_Selectors#class_selectors";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/CSS/Selektoren/Klassenselektor";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Damit man einen Style anwenden kann, muss zuvor die <abbr title="Cascading Style Sheets">CSS</abbr>-Datei
                mit der <abbr
                        title="Hypertext Markup Language">HTML</abbr>-Datei verknüpft
                werden. Dies geschieht über das <code>&lt;link></code>-Element im <code>&lt;head></code>-Element der
                entsprechenden <abbr
                        title="Hypertext Markup Language">HTML</abbr>-Datei.
            </p>
            <div class="block is-pulled-left">
                <p>Syntax</p>
            </div>
        </div>
        <pre><code>&lt;link rel="stylesheet" href="CSS-DATEI"></code></pre>
        <p>Beispiel</p>
    </div>
    <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;title>Reisetipps&lt;/title>
    &lt;link rel="stylesheet" href="style.css">
&lt;/head>
&lt;body>...&lt;/body>
&lt;/html></code></pre>
    <p>Diese Verknüpfung muss in jeder <abbr
                title="Hypertext Markup Language">HTML</abbr>-Datei vorgenommen werden. Man kann auch mehrere <abbr
                title="Cascading Style Sheets">CSS</abbr>-Dateien verlinken. Dazu muss man pro <abbr
                title="Cascading Style Sheets">CSS</abbr>-Datei ein <code>&lt;link></code>-Element einfügen.</p>
</div>