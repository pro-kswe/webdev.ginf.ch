<div id="i" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>i</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/i";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>i</code>-Element hebt innerhalb eines Fliesstextes einen Teil vom Rest des Textes ab. Die
                meisten
                Browser stellen den Text dann kursiv dar. Dies kann sich in Zukunft auch ändern und zur Sicherheit
                sollte man die Darstellung mit <abbr title="Cascading Style Sheets">CSS</abbr> definieren (siehe dazu
                auch die Beschreibung von MDN Web Docs). Neben dem <code>i</code>-Element gibt es auch das
                <code>em</code>-Element, um Text eine starke Bedeutung zu geben.
            </p>
            <p>Code</p>
        </div>
        <pre><code>Das Buch &lt;i&gt;Per Anhalter durch die Galaxis&lt;/i>
ist ein Klassiker der Science-Fiction-Literatur.</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            Das Buch <i>Per Anhalter durch die Galaxis</i>
            ist ein Klassiker der Science-Fiction-Literatur.
        </div>
    </div>
</div>