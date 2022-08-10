<div class="box">
    <span class="anchor" id="meta"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>meta</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Grundgerüst#Zeichencodierung";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>meta</code>-Element erlaubt Metainformationen über die Webseite zu definieren. Es gibt
                verschiedene Metainformationen, die man angeben kann. Im Grundgerüst wird das <code>meta</code>-Element
                dazu benutzt, um die Zeichencodierung des Dokuments anzugeben. Damit weiss der Browser, wie er die
                Binärdaten decodieren muss. Es muss sichergestellt sein, dass das Dokument dann auch wirklich mit der
                spezifizierten Zeichenkodierung gespeichert wurde.
            </p>
        </div>
        <pre><code>&lt;meta charset="UTF-8"></code></pre>
        <p class="notification is-info">
            Das <code>meta</code>-Element hat <b>keinen</b> Closing-Tag!
        </p>
        <div class="notification is-danger">
            Verwenden Sie <b>immer</b> <code>UTF-8</code> als Zeichencodierung.
        </div>
    </div>
</div>