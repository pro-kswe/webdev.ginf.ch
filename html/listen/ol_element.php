<div id="ol" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>ol <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/Listen/Aufzählungslisten#ol";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Das <code>ol</code>-Element kann dazu verwendet werden, um Elemente aufzulisten, bei denen die
                Reihenfolge relevant ist. Man spricht von einer geordneten oder sortierten Liste (eng.
                ordered list).<br>
                Ein Listenelement (eng. list element) wird mit dem <code>li</code>-Element definiert. Es wird innerhalb
                des <code>ol</code>-Elements notiert.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;ol>
    &lt;li>Zürich&lt;/li>
    &lt;li>Genf&lt;/li>
    &lt;li>Basel&lt;/li>
&lt;/ol>
</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <ol>
                <li>Zürich</li>
                <li>Genf</li>
                <li>Basel</li>
            </ol>
        </div>
    </div>
</div>