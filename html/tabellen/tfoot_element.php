<div id="tfoot" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>tfoot <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tfoot";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tabellen/Aufbau_einer_Tabelle#Tabellen_mit_Kopf.2C_K.C3.B6rper_und_Fu.C3.9F";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Jede Tabelle sollte semantisch gegliedert werden: Tabellenkopf (optional), <b>Tabellenfuss</b>
                (optional) und Tabellenkörper (verpflichtend).<br>
                Mit <code>tfoot</code> beginnt der Tabellenfuss. Darin kann sich eine Zusammenfassung der Tabelle
                befinden oder zusätzliche Erklärungen.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;tfoot>
    &lt;!-- Tabellenfuss -->
&lt;/tfoot></code></pre>
        <div class="notification is-danger">
            Das <code>tfoot</code>-Element darf nicht mit dem <code>footer</code>-Element verwechselt werden!
        </div>
    </div>
</div>