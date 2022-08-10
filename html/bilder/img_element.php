<div class="box">
    <div class="block">
        <span class="anchor" id="img">&nbsp;</span>
        <h5 class="title is-5 is-pulled-left">
            <code>img</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/Links/img";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            Das <code>img</code>-Element (Abkürzung für <i>image</i>) wird für die Anzeige von Bildern eingesetzt. Das
            Element benötigt zwei Attribute: <code>src</code> und <code>alt</code>. Mit dem <code>src</code> wird die
            Bilddatei referenziert. Dies ist notwendig, damit der Browser weiss, welches Bild angezeigt werden soll. Das
            <code>alt</code> definiert einen Text der angezeigt wird, falls die Bilddatei nicht vorhanden ist. Die
            Bilddatei muss, wie das <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument für den Browser
            verfügbar sein. Dies bedeutet, man muss die Bilddateien ebenfalls <i>uploaden</i>. Man kann auch ein Bild
            über einen Link einbinden. Dies wird auch <i>Hotlink</i> genannt. Das <code>img</code>-Element unterstützt
            folgende Bildformate:
            <ul>
                <li>GIF</li>
                <li>JPEG</li>
                <li>PNG</li>
                <li>SVG</li>
                <li>AVIF</li>
                <li>WEbP</li>
            </ul>
            <p>
                Zwischen den Tags muss der Name des Links notiert werden. Dieser wird dann anstelle der Zieladresse
                angezeigt. Wenn man auf den Text klickt, wird dann die Zieladresse aufgerufen.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;img src="img/www_logo.png" alt="World Wide Web Logo">
&lt;img src="https://imgs.xkcd.com/comics/barrel_cropped_(1).jpg" alt="XKCD #1"></code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <img src="img/www_logo.png" alt="World Wide Web Logo">
            <img src="https://imgs.xkcd.com/comics/barrel_cropped_(1).jpg" alt="XKCD #1">
        </div>
        <p>
            Das Beispiel zeigt, wie man ein Bild aus dem Ordner <code>img</code> referenziert. Das zweite Element
            verwendet als Quelle einen Link zu einer (externen) Webseite (Hotlink).
        </p>
        <p class="notification is-info">
            Das <code>img</code>-Element hat <b>keinen</b> Closing-Tag!
        </p>
        <div class="notification is-danger mt-5">
            Häufiger Tippfehler: <code>src</code> (steht für source) nicht scr!
        </div>
    </div>
</div>