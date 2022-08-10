<div id="header" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>header <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/header";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            Das <code>header</code>-Element sollte als Erstes innerhalb des
            <code>body</code>-Elements notiert werden. Der Inhalt des Elements ist meist ein
            Banner, ein Logo, eine Überschrift und ein Slogan. Auch das Menü kann im <code>header</code>-Element
            eingebaut werden. Der Header bleibt meist für die ganze Website identisch.
        </div>
        <pre><code>&lt;header&gt;
    &lt;!-- Banner, Logo, Überschrift, Menü ... -->
&lt;/header&gt;
</code></pre>
        <div class="notification is-danger">
            Das <code>header</code>-Element darf nicht mit dem <code>head</code> oder <code>thead</code>-Element
            verwechselt werden!
        </div>
    </div>
</div>