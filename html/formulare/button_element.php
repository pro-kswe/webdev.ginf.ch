<div id="button" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>button</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/Formulare/Was_ist_ein_Webformular%3F#Buttons";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das Absenden des Formulars wird mit einem Klick auf den "Submit"-Button ausgelöst. Ein Button kann mit
                dem <code>button</code>-Element eingefügt werden. Die Beschriftung des Buttons wird als Inhalt
                definiert. Das Attribut <code>type</code> kann den Wert <code>submit</code> (Standard) oder
                <code>reset</code> besitzen.<br> Mit <code>&lt;button type="submit">Absenden&lt;/button></code> erhält
                man
                einen "Submit"-Button der das Formular abschickt und die Datenübertragung initiiert.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;button type="submit">Los&lt;/button>
&lt;button>Abschicken&lt;/button>
&lt;button type="reset">Löschen&lt;/button>
</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <button type="submit">Los</button>
            <button>Abschicken</button>
            <button type="reset">Löschen</button>
        </div>
        <div class="notification is-info mt-5">
            Ein Button ausserhalb des <code>form</code>-Elements hat keinen Effekt. Das Formular wird <b>nicht</b>
            abgeschickt.
        </div>
    </div>
</div>