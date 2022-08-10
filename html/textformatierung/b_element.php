<div id="b" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>b</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/b";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>b</code>-Element hebt innerhalb eines Fliesstextes einen Teil hervor. Man möchte den Leser auf
                diese Stelle besonders aufmerksam machen. Die meisten Browser stellen den Text dann fett gedruckt dar.
                Screenreader können dieses Wort besonders betonen. Dies kann sich in Zukunft auch ändern und zur
                Sicherheit sollte man die Darstellung mit <abbr title="Cascading Style Sheets">CSS</abbr> definieren
                (siehe dazu auch die Beschreibung von MDN Web Docs). Neben dem <code>b</code>-Element gibt es auch das
                <code>strong</code>-Element, um Text eine sehr starke Bedeutung zu geben.
            </p>
            <p>Code</p>
        </div>
        <pre><code>Die &lt;b&gt;Antwort&lt;/b> auf alles lautet &lt;b>42&lt;/b>.</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            Die <b>Antwort</b> auf alles lautet <b>42</b>.
        </div>
    </div>
</div>