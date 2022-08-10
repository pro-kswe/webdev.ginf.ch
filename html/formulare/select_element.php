<div id="select" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>select</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/Formulare/Auswahllisten";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Ein <code>select</code>-Element kann in einem Formular zur Auswahl von festen Einträgen eingesetzt
                werden (auch <i>Auswahlliste</i> oder <i>Dropdown-Liste</i> genannt). Auch das <code>select</code>-Element
                benötigt einen Namen, eine ID und kann als verpflichtende Angabe deklariert werden. Die Auswahleinträge
                werden innerhalb von <code>option</code>-Elementen notiert. Jeder Eintrag benötigt ein
                <code>option</code>-Element. Jedes <code>option</code>-Element besitzt ein Attribut <code>value</code>.
                Darin wird definiert, welcher Wert beim Absenden des Formulars übertragen wird. Innerhalb des <code>option</code>-Elements
                wird die visuelle Anzeige definiert. Dieser Inhalt wird <b>nicht</b> übertragen.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;label for="pet-select">Haustier:&lt;/label>
&lt;select name="pets" id="pet-select">
    &lt;option value="dog">Hund&lt;/option>
    &lt;option value="cat">Katze&lt;/option>
    &lt;option value="mouse">Maus&lt;/option>
&lt;/select>
            </code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <label for="pet-select">Haustier:</label>
            <select name="pets" id="pet-select">
                <option value="dog">Hund</option>
                <option value="cat">Katze</option>
                <option value="mouse">Maus</option>
            </select>
        </div>
    </div>
</div>