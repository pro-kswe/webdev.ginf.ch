<div class="box">
    <span class="anchor" id="title"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            Überschriften
        </h5>
        <?php
        $links["Bulma"] = "https://bulma.io/documentation/elements/title/";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Damit man das <abbr title="Cascading Style Sheets">CSS</abbr>-Framework verwenden kann, muss man die
                Klassendeklarationen mit der <abbr title="Hypertext Markup Language">HTML</abbr>-Datei verknüpfen. Man
                muss keine <abbr title="Cascading Style Sheets">CSS</abbr>-Datei herunterladen. Man kann auch einen Link
                zur Datei angeben. Der Download erfolgt dann beim Aufrufen der Webseite automatisch.
            </p>
        </div>
        <pre><code>&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"></code></pre>
    </div>
    <p>Diese Verknüpfung muss in <b>jeder</b> <abbr
                title="Hypertext Markup Language">HTML</abbr>-Datei vorgenommen werden.</p>
</div>