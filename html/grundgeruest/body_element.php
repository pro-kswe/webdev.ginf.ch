<div class="box">
    <span class="anchor" id="body"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>body <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Grundgerüst#Der_body:_sichtbarer_und_strukturierter_Aufbau";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            Das <code>body</code>-Element beinhaltet alle Informationen, die für den Benutzer sichtbar sein sollen.
            Es
            gibt nur ein <code>body</code>-Element pro Dokument und es sollte nach dem <code>head</code>-Element das
            zweite Element innerhalb des <code>html</code>-Elements sein.
        </div>
        <pre><code>&lt;body>
    &lt;!-- Alle sichtbaren Inhalte -->
&lt;/head>
</code></pre>
        <div class="notification is-danger">
            Das <code>body</code>-Element darf nicht mit dem <code>tbody</code>-Element
            für Tabellen verwechselt werden!
        </div>
    </div>
</div>