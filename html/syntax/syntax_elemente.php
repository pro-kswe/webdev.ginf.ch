<div class="box">
    <div class="columns">
        <span class="anchor" id="syntaxElemente">&nbsp;</span>
        <div class="column is-6">
            <h5 class="title is-5">
                Syntax für <abbr title="Hypertext Markup Language">HTML</abbr>-Elemente
            </h5>
        </div>
        <div class="column is-6">
            <?php
            $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics#anatomy_of_an_html_element";
            $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Element,_Tag_und_Attribut#Elemente_und_Tags";
            include("../external_links.php");
            ?>
        </div>
    </div>
    <div class="block">
        <p class="content">
            Jedes Element besitzt einen Namen. Der Name des Elements wird in spitzen Klammern
            notiert und <b>Tag</b> genannt. Ein Element besteht meist aus einem <b>Paar</b> von
            Tags. Es gibt ein <b>Opening-Tag</b> und einen <b>Closing-Tag</b>. Dazwischen kann der
            eigentliche Inhalt notiert werden. Folgendes Bild zeigt ein erstes Beispiel.
        </p>
    </div>
    <div class="block">
        <figure class="image">
            <img style="width: 75%" src="../img/html_element.jpeg" alt="HTML-Element Beispiel">
        </figure>
    </div>
    <div class="block">
        <p class="content">
            Das <code>b</code>-Element besitzt den Opening-Tag <code>&lt;b></code> und den
            Closing-Tag <code>&lt;/b></code>. Beide Tags haben stets den gleichen Namen. Zwischen
            den Tags wird der eigentliche Inhalt notiert. In diesem Beispiel ist es ein Text. Das
            <code>b</code>-Element ("Bring Attention To") hat die Bedeutung die Aufmerksamkeit
            des Lesers auf die Textstelle zu lenken. Durch das <code>b</code>-Element weiss der
            Browser, dass er den Inhalt zwischen den Tags hervorheben sollte.<br> Man kann <abbr
                    title="Hypertext Markup Language">HTML</abbr>-Elemente auch verschachteln. Der
            Inhalt eines Elements kann wieder ein Element beinhalten. Man kann
            auch Text und Elemente mischen. Es ist dabei auf die korrekte Reihenfolge der Tags zu
            achten. Folgendes Bild zeigt ein weiteres Beispiel.
        </p>
    </div>
    <div class="block">
        <figure class="image">
            <img style="width: 50%" src="../img/nested_html_elements.jpeg"
                 alt="Verschachteltes HTML-Element Beispiel">
        </figure>
    </div>
    <div class="block">
        <p class="content">
            Manche Elemente besitzen kein Closing-Tag und somit auch keinen Inhalt. Prinzipiell
            spielt bei <abbr title="Hypertext Markup Language">HTML</abbr> die Gross- und
            Kleinschreibung der Tags keine Rolle (case-insensitive). Die Tags <code>&lt;b></code>
            und <code>&lt;B></B></code> sind somit semantisch identisch. Es hat sich jedoch über die
            Jahre durchgesetzt, dass man nur <b>Kleinbuchstaben</b> benutzt.<br>
            Zeilenumbrüche, Leerzeichen vor oder nach Tags und Leerzeilen haben auf die Darstellung
            keinen Einfluss. Die Beispiele in folgendem Bild erzeugen deshalb das gleiche Resultat.
        </p>
    </div>
    <div class="block">
        <figure class="image">
            <img style="width: 50%" src="../img/html_multiline.jpeg"
                 alt="HTML-Elemente und Leerzeilen">
        </figure>
    </div>
</div>