<div class="box">
    <span class="anchor" id="deklaration"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            Deklaration
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Selectors/Type_Class_and_ID_Selectors#class_selectors";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/CSS/Selektoren/Klassenselektor";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Eine Klassendeklaration definiert eine Gruppe von Style-Eigenschaften. Klassen beginnen immer mit einem
                Punkt <code>.</code>. Dann folgt der <b>Klassenname</b>. Dieser kann frei gewählt werden. Nach der
                geschweiften Klammer <code>{</code> folgen die Style-Deklarationen. Eine <b>Style-Deklaration</b>
                besteht aus zwei Komponenten: <b>Eigenschaft</b> und <b>Wert</b>. Eigenschaft und Wert werden durch
                einen Doppelpunkt (<code>:</code>) getrennt. Die Style-Deklarationen wird mit einem Semikolon
                (<code>;</code>) abgeschlossen. Es können mehrere Style-Deklarationen pro Klasse notiert werden. Eine
                CSS-Klasse wird mit einer weiteren geschweiften Klammer <code>}</code> geschlossen.
            </p>
            <p>Syntax</p>
        </div>
        <pre><code>.KLASSENNAME {
    EIGENSCHAFT: WERT;
    EIGENSCHAFT: WERT;
    ...
}
</code></pre>
        <p>Beispiel</p>
        <pre><code>.header {
    color: cornflowerblue;
    background-color: gold;
    text-align: center;
}
</code></pre>
        <figure class="image">
            <img style="width: 50%" src="../img/css_syntax.png" alt="CSS Syntax Beispiel">
        </figure>
        <p>Sie können mehrere Klassendeklaration in eine <abbr
                    title="Cascading Style Sheets">CSS</abbr>-Datei notieren. Es können auch mehrere <abbr
                    title="Cascading Style Sheets">CSS</abbr>-Dateien erstellt werden, um die Styles zu trennen.</p>
        <p>Weitere Beispiele</p>
        <pre><code>.header {
    color: cornflowerblue;
    background-color: gold;
    text-decoration-color: black;
    text-decoration-line: underline;
    text-align: center;
}

.subheader {
    color: darkgreen;
    background-color: beige;
    text-transform: uppercase;
}

.citation {
    background-color: rgb(200, 200, 200);
    padding: 20px;
    display: block;
    text-align: center;
    margin: 50px;
    font-style: italic;
}
</code></pre>
        <div class="notification is-danger mt-5">
            Clean Code! Notieren Sie in einer Zeile jeweils nur eine Style-Deklaration. Dies sorgt für eine bessere
            Übersicht über die Styles.
        </div>
        <p>
            Es gibt zahlreiche Eigenschaft. Die Bedeutung muss man nachschlagen. Eine <a
                    href="https://developer.mozilla.org/de/docs/Web/CSS/Reference">CSS Referenz</a> kann dabei helfen,
            welche Eigenschaften es gibt und welche Werte man verwenden kann.
        </p>
    </div>
</div>