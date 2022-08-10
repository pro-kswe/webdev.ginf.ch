<div class="box">
    <div class="columns">
        <span class="anchor" id="syntaxAttribute">&nbsp;</span>
        <div class="column is-6">
            <h5 class="title is-5">
                Syntax für <abbr title="Hypertext Markup Language">HTML</abbr>-Attribute
            </h5>
        </div>
        <div class="column is-6">
            <?php
            $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics#anatomy_of_an_html_element";
            $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/HTML5/Element,_Tag_und_Attribut#Attribute_in_Tags";
            include("../external_links.php");
            ?>
        </div>
    </div>
    <div class="block">
        <p class="content">
            Man kann für ein <abbr title="Hypertext Markup Language">HTML</abbr>-Element zusätzliche
            Informationen notieren. Dies sind <b>nicht</b> Teil des Inhalts und werden nicht
            (direkt) dargestellt. Jede zusätzliche Information wird mit einem <b>Attribut</b>
            definiert. Jedes Element erlaubt eine vorgegebene Menge von Attributen. Jedes Attribut
            hat eine Bedeutung, die auch der Browser kennt. Mit dieser Information passt der Browser
            das Verhalten des Elements an. Folgendes Bild zeigt ein Beispiel für ein Element mit
            einem Attribut. Das <abbr title="Hypertext Markup Language">HTML</abbr>-Element <code>img</code>
            besitzt im Beispiel zwei Attribute. Das Attribut <code>src</code> gibt den Dateinamen
            des Bildes an. Das Attribut <code>alt</code> definiert einen Text, der angezeigt wird,
            falls die Bilddatei nicht vorhanden ist.
        </p>
    </div>
    <div class="block">
        <figure class="image">
            <img style="width: 75%" src="../img/html_attribute.jpeg"
                 alt="HTML-Attribut Beispiel">
        </figure>
    </div>
    <div class="block">
        <p class="content">
            Jedes Attribut besitzt einen <b>Attributnamen</b> und einen <b>Attributwert</b>. Auf den Attributnamen
            folgt <b>immer</b> ein <b>Gleichheitszeichen</b> (<code>=</code>). Der Attributwert wird
            <b>immer</b> in zwei doppelten <b>Anführungszeichen</b> (<code>"</code>) notiert. Pro
            Element darf ein Attribut nur einmal notiert werden. Zwischen zwei Attributen oder dem
            Elementnamen wird ein Leerzeichen notiert. Nicht alle Element verlangen zwingend ein
            Attribut. Bei vielen Elementen sind die Attribute optional. Die Reihenfolge der
            Attribute spielt keine Rolle.
        </p>
    </div>
</div>