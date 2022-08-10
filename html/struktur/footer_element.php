<div id="footer" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>footer <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/footer";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            Das <code>footer</code>-Element wird typischerweise als letztes Element im
            <code>body</code>-Element notiert. Es beinhaltet allgemeine Angaben zur Website
            (zum Beispiel Link zum Impressum und Datenschutz).
        </div>
        <pre><code>&lt;footer&gt;
    &lt;!-- Link zum Impressum, Datenschutz, Informationen zum Autor, ... -->
&lt;/footer&gt;
</code></pre>
        <div class="notification is-danger">
            Das <code>footer</code>-Element darf nicht mit dem <code>tfoot</code>-Element
            verwechselt werden!
        </div>
    </div>
</div>