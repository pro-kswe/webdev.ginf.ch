<div id="thead" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>thead <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tabellen/Aufbau_einer_Tabelle#Tabellen_mit_Kopf.2C_K.C3.B6rper_und_Fu.C3.9F";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Jede Tabelle sollte semantisch gegliedert werden: <b>Tabellenkopf</b> (optional), Tabellenfuss
                (optional) und Tabellenkörper (verpflichtend).<br>
                Mit <code>thead</code> beginnt der Tabellenkopf. Darin sollten die Spaltenüberschriften notiert werden.
                Der Browser stellt dies dann meist fett gedruckt dar.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;thead>
    &lt;!-- Tabellenkopf -->
&lt;/thead></code></pre>
        <div class="notification is-danger">
            Das <code>thead</code>-Element darf nicht mit dem <code>header</code> oder <code>head</code>-Element
            verwechselt werden!
        </div>
    </div>
</div>