<div id="th" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>th</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tabellen/Aufbau_einer_Tabelle#Kopf-_und_Datenzellen";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Mit dem <code>th</code>-Element wird der eigentliche Inhalt (table header) im <b>Tabellenkopf</b>
                notiert. Ein <code>th</code>-Element wird <b>immer</b> innerhalb einer Zeile (<code>tr</code>-Element)
                notiert. Jedes <code>th</code>-Element entspricht einer Zelle im Tabellenkopf (<code>thead</code>). Die
                Zellen werden Spalte für Spalte, von links nach rechts notiert.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;th>
    &lt;!-- Spaltenüberschrift -->
&lt;/th></code></pre>
    </div>
</div>