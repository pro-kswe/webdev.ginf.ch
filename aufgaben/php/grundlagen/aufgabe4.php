<div class="box">
    <span class="anchor" id="aufgabe4"></span>
    <div class="block">
        <h5 class="title is-5">
            Aufgabe 4
        </h5>
        <div class="block">
            <p class="content">
                Die <code>date</code>-Funktion ermittelt das Datum bzw. die Zeit in einer vorgegebenen Schreibweise
                (Format). Analysieren Sie die <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei <code>aufgabe4.php</code>.
                Notieren Sie mit einem Kommentar, was der jeweilige Übergabewert (der String) bewirkt.
            </p>
            <p class="content">
                Erzeugen Sie dann in der Datei (ganz am Ende) folgende Ausgabe:<br><code>Heute ist der 24.08.2021. Es
                    ist 14:08:07 Uhr.</code><br> Verwenden Sie dafür natürlich das aktuelle Datum und die aktuelle Uhrzeit.
            </p>
            <h6 class="title is-6">Template</h6>
            <p class="content">
                Erstellen Sie eine <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei <code>aufgabe4.php</code>
                und kopieren Sie in diese Datei den folgenden Code.
            </p>
        </div>
        <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;title>Aufgabe 4&lt;/title>
&lt;/head>
&lt;body>
&lt;h1>Aufgabe 4&lt;/h1>
&lt;?php
echo date("Y");
echo "&lt;br>";
echo date("M");
echo "&lt;br>";
echo date("m");
echo "&lt;br>";
echo date("d");
echo "&lt;br>";
echo date("D");
echo "&lt;br>";
echo date("H");
echo "&lt;br>";
echo date("i");
echo "&lt;br>";
echo date("s");
echo "&lt;br>";
// Dies ist ein PHP-Kommentar: Hier kommt Ihre Loesung hin.
// Tipp: Sie koennen die Angaben kombinieren, das heisst als Argument auch "YM" verwenden.
?>
&lt;/body>
&lt;/html>
</code></pre>
    </div>
</div>