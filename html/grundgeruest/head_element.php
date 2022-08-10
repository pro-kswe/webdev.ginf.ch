<div class="box">
    <span class="anchor" id="head"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>head <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Grundgerüst#Der_head:_unsichtbar.2C_aber_unverzichtbar";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            Das <code>head</code>-Element beinhaltet Informationen, die nicht direkt für den
            Benutzer im Browser sichtbar sind (mit einer Ausnahme). Im <code>head</code>-Element
            wird deshalb kein Inhalt notiert, sondern <i>Metainformationen</i>. Diese sind
            nicht für den Benutzer gedacht, sondern werden durch Computerprogramme
            verarbeitet. Typischerweise werden im <code>head</code>-Element die (Zeichen-)
            Codierung des Dokuments definiert, Styles für grafische Anpassungen verlinkt,
            Angaben zur Darstellung auf Mobilgeräten definiert oder <q>suchmaschinenfreundliche</q>
            Beschreibungen der Webseite notiert.
        </div>
        <pre><code>&lt;head>
    &lt;!-- Metainformationen, Titel, Links zu Style und/oder Skriptdateien -->
&lt;/head>
</code></pre>
        <div class="notification is-danger">
            Das <code>head</code>-Element darf nicht mit dem <code>header</code> oder <code>thead</code>-Element
            verwechselt werden!
        </div>
    </div>
</div>