<div id="input" class="box">
    <div class="block">
        <h5 class="title is-5 is-pulled-left">
            <code>input</code>
        </h5>
        <?php
        $links["MDN Web Docs"] = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input";
        $links["SELFHTML"] = "https://wiki.selfhtml.org/wiki/HTML/Tutorials/Formulare/input";
        include("../external_links.php");
        ?>
        <div class="block is-pulled-left">
            <p>
                Die Eingabe der Daten kann über <code>input</code>-Elemente erfolgen. Das Attribut <code>type</code>
                spezifiziert, welches Verhalten das Element zeigen soll.
            </p>
            <ul>
                <li>
                    <code>type="text"</code>: "ganz normale" Textbox
                </li>
                <li>
                    <code>type="password"</code>: Eingabe wird durch Platzhalter (Sternchen, Punkte etc) "verschleiert"
                    (das Passwort wird dabei <b>nicht</b> verschlüsselt!)
                </li>
                <li>
                    <code>type="email"</code>: erlaubt nur gültige E-Mail-Adressen (es wird <b>nicht</b> geprüft ob die
                    E-Mail-Adresse auch wirklich existiert).
                </li>
                <li>
                    <code>type="number"</code>: es sind nur Zahlen als Eingabe erlaubt.
                </li>
            </ul>
            <p>
                Es gibt noch zahlreiche weitere Typen (<a
                        href="https://wiki.selfhtml.org/wiki/HTML/Tutorials/Formulare/input">zur Übersicht</a>).
                Möchte man den Benutzer zu einer Eingabe zwingen, dann kann man das Attribut
                <code>required="required"</code> (oder kurz <code>required</code>) verwenden. Jedes <code>input</code>-Element
                sollte ein <code>id</code>-Attribut besitzen. Der Attributwert muss innerhalb des Formulars eindeutig
                sein. Es kann dazu verwendet werden, um die Beschriftung (<code>label</code>-Element) mit dem <code>input</code>-Element
                zu verknüpfen. Verpflichtend ist die Angabe eines <code>name</code>-Attribut. Der Name wird verwendet,
                um die Eingabedaten nach dem Absenden des Formulars übermitteln zu können. Der eingegebene Wert wird mit
                dem Namen “verknüpft”. Auch der Name muss innerhalb des Formulars eindeutig sein.
            </p>
            <p>Code</p>
        </div>
        <pre><code>&lt;input type="text" id="benutzername" name="bname" required>
&lt;input id="fach" name="fach" required>
&lt;input id="passwort" name="pw" required>
&lt;input type="number" min="0" max="120" step="1" id="alter" name="alter" required>
</code></pre>
        <p>Rendering</p>
        <div style="all: initial;">
            <input type="text" id="benutzername" name="bname" required>
            <input id="fach" name="fach" required>
            <input type="password" id="passwort" name="pw" required>
            <input type="number" min="0" max="120" step="1" id="alter" name="alter" required>
        </div>
        <div class="notification is-info mt-5">
            Für das Attribut <code>type</code> ist der Standardwert <code>text</code>. Je nach Inputtyp sind weitere
            Attribute verfügbar (zum Beispiel <code>min</code> für <code>type="number"</code>).
        </div>
        <div class="notification is-info mt-5">
            Das <code>input</code>-Element hat <b>keinen</b> Closing-Tag.
        </div>
        <div class="notification is-danger mt-5">
            Jedes <code>input</code>-Element sollte mit einem <code>label</code>-Element verknüpft werden.
        </div>
    </div>
</div>