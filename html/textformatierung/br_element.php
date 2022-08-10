<div id="br" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>br</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/i";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>br</code>-Element erzeugt einen Zeilenumbruch (eng. line break). In einem Fliesstext kann man
                damit eine neue Zeile <i>erzwingen</i>.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;p&gt;Apfel Apfel Apfel&lt;br>Apfel Apfel Apfel&lt;br>Apfel Apfel Birne&lt;/p></code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <p>Apfel Apfel Apfel<br>Apfel Apfel Apfel<br>Apfel Apfel Birne</p>
        </div>
        <p class="notification is-info mt-5">
            Das <code>br</code>-Element hat <b>keinen</b> Closing-Tag!
        </p>
        <div class="notification is-danger">
            Verwenden Sie das <code>br</code>-Element <b>nicht</b>, um einen Abstand zwischen Elementen zu erzeugen.
            Dafür ist <abbr title="Cascading Style Sheets">CSS</abbr> zuständig.
        </div>
    </div>
</div>