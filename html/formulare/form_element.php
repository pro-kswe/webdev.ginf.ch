<div id="form" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>form <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/form";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>form</code>-Element wird paarweise verwendet und gibt den "Rahmen" für ein Formular vor. Alle
                Formularelemente (<code>input</code>, <code>select</code>, <code>button</code> etc.) werden innerhalb
                dieses Elements notiert. Das Element besitzt zwei wichtige Attribute: <code>action</code> und
                <code>method</code>. Das <code>action</code>-Attribut bestimmt welche Webseite nach dem Klicken auf den
                "submit"-Button aufgerufen werden soll. Das <code>method</code> Attribut definiert die
                Übertragungsmethode. Der Standardwert lautet <code>get</code> (Datenübertragung via <abbr
                        title="Uniform Resource Locator">URL</abbr>). Als Alternative kann man <code>post</code>
                verwenden. Dann werden die Formulardaten im "Hintergrund" (Body des <abbr
                        title="Hypertext Transfer Protocol ">HTTP</abbr> Requests) übertragen.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;form action="anmelden.html">
    &lt;!-- Formularelemente -->
&lt;/form></code></pre>
        <div class="notification is-info">
            Da das Attribut <code>method</code> einen Standardwert besitzt, kann man es auch weglassen. Es wird dann
            automatisch <code>get</code> verwendet.
        </div>
    </div>
</div>