<div id="a" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>a</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/Links/a";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>a</code>-Element (auch <i>anchor</i>-Element genannt) kann sehr vielseitig eingesetzt werden.
                Man muss zwingend die Zieladresse mithilfe des <code>href</code>-Attributs (Abkürzung für hyper
                reference) angeben. Das Ziel kann sehr unterschiedlich sein. Beispiele:
            </p>
            <ul>
                <li>Ein <abbr title="Hypertext Markup Language">HTML</abbr>-Dokument der gleichen Website.</li>
                <li>Eine andere Webseite.</li>
                <li>Eine E-Mail-Adresse.</li>
                <li>Die ID eines <abbr title="Hypertext Markup Language">HTML</abbr>-Elements.</li>
            </ul>
            <p>
                Zwischen den Tags muss der Name des Links notiert werden. Dieser wird dann anstelle der Zieladresse
                angezeigt. Wenn man auf den Text klickt, wird dann die Zieladresse aufgerufen.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;a href="http://info.cern.ch/hypertext/WWW/TheProject.html">Erste Website&lt;/a>
&lt;a href="lebenslauf.html">Lebenslauf&lt;/a>
&lt;a href="mailto:info@info.ch">Nachricht schicken&lt;/a>
&lt;a href="#apfelbaum">Springe zum Element mit der ID apfelbaum&lt;/a>
</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <a class="default-link" href="http://info.cern.ch/hypertext/WWW/TheProject.html">Erste Website</a><br>
            <a class="default-link" href="lebenslauf.html">Lebenslauf</a><br>
            <a class="default-link" href="mailto:info@info.ch">Nachricht schicken</a><br>
            <a class="default-link" href="#apfelbaum">Springe zum Element mit der ID apfelbaum</a><br>
        </div>
        <div class="notification is-info mt-5">
            Mit <code>href="#ID-NAME"</code> kann man einen Link zu einem beliebigen Element mit der identischen ID
            erzeugen. Dazu muss man einfach das <code>id</code>-Attribut des Elements auf den passenden Wert setzen. Zum
            Beispiel <code>&lt;h1 id="apfelbaum">Mein Apfelbaum&lt;/h1></code> erzeugt ein Element mit der ID <code>apfelbaum</code>.
            Das Attribut im <code>a</code>-Element lautet dann <code>href="#apfelbaum"</code>. Das Rautezeichen
            (<code>#</code>) zeigt an, dass es sich um eine ID handelt. Die ID muss pro Webseite einmalig sein.
        </div>
        <div class="notification is-info mt-5">
            Mit <code>href="DATEINAME.html"</code> wird eine <abbr title="Hypertext Markup Language">HTML</abbr> Datei
            mit dem Namen <code>DATEINAME.html</code> im gleichen Ordner wie die gerade angezeigte Webseite aufgerufen.
        </div>
    </div>
</div>