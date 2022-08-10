<div id="tbody" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>tbody <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tbody";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tabellen/Aufbau_einer_Tabelle#Tabellen_mit_Kopf.2C_K.C3.B6rper_und_Fu.C3.9F";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Jede Tabelle sollte semantisch gegliedert werden: Tabellenkopf (optional), Tabellenfuss
                (optional) und <b>Tabellenkörper</b> (verpflichtend).<br>
                Mit <code>tbody</code> beginnt der Tabellenkörper. Darin sollten sich die eigentlichen Tabellendaten
                befinden.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;tbody>
    &lt;!-- Tabellenkörper -->
&lt;/tbody></code></pre>
        <div class="notification is-danger">
            Das <code>tbody</code>-Element darf nicht mit dem <code>body</code>-Element verwechselt werden!
        </div>
    </div>
</div>