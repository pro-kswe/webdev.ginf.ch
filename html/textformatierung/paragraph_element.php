<div id="paragraph" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>p <i class="fas fa-expand-alt"></i></code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Elemente/p";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Ein Textabsatz (eng. paragraph) kann mit dem <code>p</code>-Element definiert werden. Man kann dadurch
                einen Text gliedern.
                Verteilt man den Text innerhalb des Elements auf mehrere Zeilen, dann hat dies <b>keinen</b> Einfluss
                auf die Darstellung im Browser. Neue Zeilen werden ignoriert. Es wird immer versucht die ganze Zeile mit
                Text zu füllen, bevor der Text in einer neuen Zeile positioniert wird.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;p&gt;Dies ist ein Textabsatz.&lt;/p>
&lt;p&gt;
Ein zweiter Textabsatz. Man beachte den Abstand zum vorherigen Textabsatz.
Ein langer Text wird automatisch umgebrochen. Dies bedeutet, der Text wird
auf mehrere Zeilen verteilt, wenn er auf dem Bildschirm nicht in einer Zeile
dargestellt werden kann. Dies ist natürlich von der Bildschirmauflösung abhängig.
&lt;/p>
&lt;p&gt;Ein letzter Textabsatz.&lt;/p>
</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <p>Dies ist ein Textabsatz.</p>
            <p>
                Ein zweiter Textabsatz. Man beachte den Abstand zum vorherigen Textabsatz. Ein langer Text wird
                automatisch umgebrochen. Dies bedeutet, der Text wird auf mehrere Zeilen verteilt, wenn er auf dem
                Bildschirm nicht in einer Zeile dargestellt werden kann. Dies ist natürlich von der Bildschirmauflösung
                abhängig.
            </p>
            <p>Ein letzter Textabsatz.</p>
        </div>
        <div class="notification is-info mt-3">
            Fliesstext sollte <b>möglichst immer</b> in einem <code>p</code>-Element notiert werden.
        </div>
    </div>
</div>