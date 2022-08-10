<div class="box">
    <span class="anchor" id="class"></span>
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>class</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Selectors/Type_Class_and_ID_Selectors#class_selectors";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/CSS/Selektoren/Klassenselektor";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Eine <abbr title="Cascading Style Sheets">CSS</abbr>-Klasse kann für mehrere <abbr
                        title="Hypertext Markup Language">HTML</abbr>-Elemente verwendet werden. Damit ein <abbr
                        title="Hypertext Markup Language">HTML</abbr>-Element einen Style erhält, muss man dass <abbr
                        title="Hypertext Markup Language">HTML</abbr>
                <code>class</code>-Attribut verwenden. Dies existiert für <b>jedes</b> <abbr
                        title="Hypertext Markup Language">HTML</abbr>-Element.
            </p>
            <div class="block is-pulled-left">
                <p>Syntax</p>
            </div>
        </div>
        <pre><code>&lt;TAG class="KLASSENNAME">...&lt;/TAG></code></pre>
        <p>Beispiel</p>
    </div>
    <pre><code>&lt;h1 class="header">Reisetipps&lt;/h1></code></pre>
    <p>Der Browser sorgt dann dafür, dass der mit der Klasse verbundene Style eingesetzt wird und das Rendering
        entsprechend durchgeführt wird. </p>
    <div class="notification is-danger">
        Das <code>class</code>-Attribut beinhaltet den Namen der Klassendeklaration <b>ohne</b> den Punkt.
    </div>
    <p>
        Das <code>class</code>-Attribut kann <b>mehrere</b> Klassennamen erhalten. Die Klassennamen werden mit einem
        Leerzeichen getrennt. Der Inhalt beider Klassendeklaration wird dann für das Styling benutzt.
    </p>
    <p>Beispiel</p>
    <pre><code>&lt;h1 class="header zentriert">Reisetipps&lt;/h1></code></pre>
</div>