<div id="ul" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>ul <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/Listen/Aufzählungslisten#ul";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>ul</code>-Element kann dazu verwendet werden, um Elemente aufzulisten, bei denen die
                Reihenfolge keine Rolle spielt. Man spricht von einer ungeordneten oder unsortierten Liste (eng.
                unordered list). Für das Menü einer Website benutzt man gerne eine ungeordnete Liste und passt das
                Aussehen dann mit <abbr title="Cascading Style Sheets">CSS</abbr> an.<br>
                Ein Listenelement (eng. list element) wird mit dem <code>li</code>-Element definiert. Es wird innerhalb
                des <code>ul</code>-Elements notiert.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;ul>
    &lt;li>Luke Skywalker&lt;/li>
    &lt;li>R2-D2&lt;/li>
    &lt;li>C-3PO&lt;/li>
&lt;/ul>
</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <ul>
                <li>Luke Skywalker</li>
                <li>R2-D2</li>
                <li>C-3PO</li>
            </ul>
        </div>
    </div>
</div>