<div class="box">
    <span class="anchor" id="title"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>title</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Grundgerüst#der_Titel";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>title</code>-Element definiert den Titel der Webseite. Obwohl das Element nicht innerhalb des
                <code>body</code>-Elements notiert wird, benutzt der Browser den Titel zur Anzeige im Browser-Tab. Es
                wird auch von Suchmaschinen für die Trefferanzeige benutzt oder von Screenreadern vorgelesen. Es
                empfiehlt sich, möglichst für jede Webseite einen passenden Titel zu vergeben.
            </p>
        </div>
        <pre><code>&lt;title>&lt;!-- Titel der Webseite -->&lt;/title></code></pre>
        <div class="notification is-danger">
            Häufiger Tippfehler: <code>title</code> (eng.) nicht Titel (dt.)!
        </div>
    </div>
</div>