<div class="box">
    <div class="columns">
        <span class="anchor" id="platz">&nbsp;</span>
        <div class="column is-6">
            <h5 class="title is-5">
                Wie viel "Platz" benötigt ein <abbr
                        title="Hypertext Markup Language">HTML</abbr>-Element?
            </h5>
        </div>
        <div class="column is-6">
            <?php
            $links["MDN Web Docs 1"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Block-level_elements";
            $links["MDN Web Docs 2"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Inline_elements";
            include("../external_links.php");
            ?>
        </div>
    </div>
    <div class="block">
        <p class="content">
            Bei der Darstellung der Elemente gibt es zwei grundlegende Kategorien. Die sogenannten
            <b>"Block"-Elemente</b> erhalten <b>immer</b> (und unabhängig vom Inhalt) die
            vollständige Bildschirmbreite. Das Element nimmt somit immer eine vollständige Zeile bei
            der Darstellung ein. <b>"Inline"-Elemente</b> erhalten nur so viel Platz wie nötig. Der
            Inhalt (etwa der Text) bestimmt somit die Breite der Darstellung. "Inline"-Elemente
            sollten nur Textinformationen oder andere "Inline"-Elemente enthalten.
        </p>
    </div>
    <div class="notification is-info">
        In den Erklärungen
        werden alle "Block"-Elemente mit <i class="fas fa-expand-alt"></i> markiert. Alle
        anderen Elemente sind "Inline"-Elemente.
    </div>
</div>