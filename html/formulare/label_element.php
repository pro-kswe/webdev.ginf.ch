<div id="label" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>label</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/label";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Ein <code>label</code>-Element dient zur Beschriftung von <code>input</code>-Elementen. Mit dem
                <code>for</code>-Attribut wird das <code>input</code>-Element referenziert. Der Attributwert muss
                identisch zu einem <code>id</code>-Attributwert sein.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;label for="benutzername">Benutzername:&lt;/label></code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <label for="benutzername">Benutzername:</label>
        </div>
        <div class="notification is-info mt-5">
            <code>input</code> und <code>label</code>-Element werden in der Regel immer zusammen eingesetzt. Beispiel:
            <pre class="mt-5"><code>&lt;label for="benutzername">Benutzername:&lt;/label>
&lt;input type="text" id="benutzername" name="bname" required></code></pre>
        </div>
    </div>
</div>