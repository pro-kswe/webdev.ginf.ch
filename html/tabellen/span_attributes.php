<div id="colspan" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>colspan</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td#attr-colspan";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tabellen/Zellen_verbinden#Zellen_in_einer_Zeile_verbinden_-_colspan";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Mit dem Attribut <code>colspan</code> (column span) kann man in Kombination mit einem <code>td</code>-Element
                verwenden. Das Attribut erlaubt das <i>Verbinden von Spalten</i>. Die Tabellenzelle wird nach
                <b>rechts</b> über die definierte Anzahl von Spalten ausgedehnt. Die Zelle, in der das Attribut definiert
                wird, zählt bei der Anzahl immer mit.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;td colspan="3">
    &lt;!-- Tabellendaten über drei Spalten ausgedehnt. -->
&lt;/td></code></pre>
    </div>
</div>
<div id="rowspan" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>rowspan</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td#attr-rowspan";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tabellen/Zellen_verbinden#Zellen_in_einer_Spalte_verbinden_-_rowspan";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Mit dem Attribut <code>rowspan</code> kann man in Kombination mit einem <code>td</code>-Element
                verwenden. Das Attribut erlaubt das <i>Verbinden von Zeilen</i>. Die Tabellenzelle wird nach
                <b>unten</b> über die definierte Anzahl von Zeilen ausgedehnt. Die Zelle, in der das Attribut definiert
                wird, zählt bei der Anzahl immer mit.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;td rowspan="3">
    &lt;!-- Tabellendaten über drei Zeilen ausgedehnt. -->
&lt;/td></code></pre>
    </div>
</div>