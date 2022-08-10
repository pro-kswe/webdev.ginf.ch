<div class="box">
    <span class="anchor" id="doctype"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>DOCTYPE</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Glossary/Doctype";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Grundgerüst#Doctype";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            Der DOCTYPE definiert, welche Sprache (im Sinne von <q>Programmiersprache</q>)
            für die Webseite verwendet wird. Es ist kein <abbr
                    title="Hypertext Markup Language">HTML</abbr>-Element. Es wird in der
            <b>ersten</b> Zeile des Dokuments notiert.
        </div>
        <pre><code>&lt;!DOCTYPE html></code></pre>
        <div class="notification is-info">
            Verwenden Sie möglichst nur diesen DOCTYPE. Damit machen Sie dem Browser klar, dass
            Sie <abbr title="Hypertext Markup Language">HTML</abbr> in der Version 5 verwenden.
            <abbr title="Hypertext Markup Language">HTML</abbr> hat sich in den letzten 30
            Jahren stetig verändert. Deshalb gibt es verschiedene Versionen und dazu passende
            DOCTYPE Deklarationen.
        </div>
    </div>
</div>