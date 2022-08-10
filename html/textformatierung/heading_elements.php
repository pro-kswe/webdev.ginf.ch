<div id="headings" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            Headings &nbsp;&nbsp;<i class="fas fa-expand-alt"></i>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Heading_Elements";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/h1";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Es gibt sechs verschiedene Überschriften. Jedes Heading-Element (<code>h1</code> bis <code>h6</code>)
                repräsentiert ein "Level". Man kann damit den Inhalt einer Webseite
                strukturieren (oberste Überschrift, Hauptüberschrift, Unterüberschrift etc.).
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;h1&gt;Überschrift Level 1&lt;/h1>
&lt;h2&gt;Überschrift Level 2&lt;/h2>
&lt;h3&gt;Überschrift Level 3&lt;/h3>
&lt;h4&gt;Überschrift Level 4&lt;/h4>
&lt;h5&gt;Überschrift Level 5&lt;/h5>
&lt;h6&gt;Überschrift Level 6&lt;/h6>
</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <h1>Überschrift Level 1</h1>
            <h2>Überschrift Level 2</h2>
            <h3>Überschrift Level 3</h3>
            <h4>Überschrift Level 4</h4>
            <h5>Überschrift Level 5</h5>
            <h6>Überschrift Level 6</h6>
        </div>
        <div class="notification is-danger">
            Die Heading-Elemente dürfen nicht mit dem <code>header</code> oder <code>head</code>-Element verwechselt
            werden.
        </div>
    </div>
</div>