<div id="main" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>main <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/main";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            Das <code>main</code>-Element beinhaltet den Inhalt für <i>diese</i> Webseite.
            Es sollte deshalb nur <b>einmal</b> pro Webseite eingesetzt werden. Es wird
            direkt im <code>body</code>-Element notiert und sollte auch nur dort benutzt
            werden. Der Inhalt im <code>main</code>-Element kann mit <code>section</code>-Elementen
            weiter strukturiert werden.
        </div>
        <pre><code>&lt;main&gt;
    &lt;!-- Weitere Unterteilung in z.B. Abschnitte (section) möglich ... -->
&lt;/main&gt;
</code></pre>
    </div>
</div>