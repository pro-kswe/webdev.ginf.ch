<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: PHP-Verarbeitung</title>
    <?php include("../../head.php"); ?>
</head>
<body class="has-navbar-fixed-top">
<header>
    <?php
    include("../../header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "phpVerarbeitung";
                    include("../php_menu.php");
                    ?>
                </div>
                <div class="column is-9">
                    <span class="anchor" id="phpVerarbeitung">&nbsp;</span>
                    <div class="columns">
                        <div class="column is-6 pl-0">
                            <h4 class="title is-4">Wie wird <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>
                                verarbeitet?</h4>
                        </div>
                        <div class="column is-6">
                            <?php
                            include("../php_breadcrumbs.php");
                            ?>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="content">
                            <div class="box">
                                <div class="block">
                                    <p>
                                        Wenn der Browser vom Webserver eine Datei anfordert, muss der Webserver
                                        entscheiden, ob der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        eingesetzt werden muss. Typischerweise
                                        wird dies aufgrund der Dateinamen-Erweiterung entschieden.
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Fall A (<b>ohne</b> <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter):
                                                Beinhaltet die <abbr title="Hypertext Transfer Protocol ">HTTP</abbr>
                                                Request Message die Anfrage nach einer <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Datei, dann wird
                                                die
                                                <abbr title="Hypertext Markup Language">HTML</abbr>-Datei von der
                                                Festplatte
                                                geladen und der Inhalt <b>direkt</b>
                                                und <b>ohne</b> <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                                an den Client in einer <abbr
                                                        title="Hypertext Transfer Protocol ">HTTP</abbr>
                                                Response Message geschickt. Dies entspricht dem Ablauf aus
                                                der folgenden Abbildung.
                                            </p>
                                            <figure class="image">
                                                <img style="width: 75%" src=""
                                                     alt="TODO">
                                            </figure>
                                            <p>
                                                Der Inhalt der <abbr
                                                        title="Hypertext Markup Language">HTML</abbr>-Datei wird kopiert
                                                und
                                                unverändert zurück geschickt.
                                            </p>
                                        </li>
                                        <li>
                                            Fall B (<b>mit</b> <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter):
                                            Falls die <abbr title="Hypertext Transfer Protocol ">HTTP</abbr> Request
                                            Message eine Anfrage nach einer <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei
                                            beinhaltet, dann wird auf der
                                            Festplatte die entsprechende <abbr
                                                    title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei gesucht.
                                            Anschliessend wird der
                                            Inhalt der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei zur
                                            Verarbeitung an den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                            geschickt. Dieser verarbeitet den Inhalt und leitet das Ergebnis an den
                                            Webserver zurück. Der Webserver nimmt das Resultat und beantwortet die
                                            Request Message mit einer <abbr
                                                    title="Hypertext Transfer Protocol ">HTTP</abbr> Response Message.
                                        </li>
                                    </ul>
                                    <div class="notification is-danger">
                                        Der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter bearbeitet
                                        <b>nur</b> <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitte.
                                        <abbr title="Hypertext Markup Language">HTML</abbr>-Code wird 1:1 in das
                                        Ergebnis des <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreters kopiert.
                                        Besitzt ein <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitt einen
                                        <code>echo</code>-Befehl, dann wird die Ausgabe
                                        ebenfalls ins Ergebnis aufgenommen. Alle <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Befehle werden
                                        <b>nicht</b>
                                        ins Ergebnis aufgenommen.
                                    </div>
                                    <p>
                                        Die <abbr title="Hypertext Transfer Protocol ">HTTP</abbr> Request Message und
                                        die <abbr title="Hypertext Transfer Protocol ">HTTP</abbr> Response Message
                                        ändern sich
                                        nicht. Lediglich bei der <abbr title="Hypertext Transfer Protocol ">HTTP</abbr>
                                        Response Message ist es nun möglich, das der
                                        Message Body durch den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        generiert wird und nicht einfach
                                        durch eine Inhaltskopie der <abbr title="Hypertext Markup Language">HTML</abbr>-Datei
                                        entsteht. Der <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        ist deshalb zunächst passiv. Der Webserver initiiert die Ausführung des
                                        <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreters.
                                    </p>
                                    <h6 class="title is-6">Beispiel</h6>
                                    <p>Es wird der Code auf der linken Seite durch den <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter verarbeitet.
                                        Das Resultat ist "nur" noch <abbr title="Hypertext Markup Language">HTML</abbr>
                                        und auf der
                                        rechten Seite zu sehen.
                                    </p>
                                    <div class="columns">
                                        <div class="column">
                                    <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;title>PHP Demo&lt;/title>
&lt;/head>
&lt;body>
&lt;h1>Dies ist ein Test.&lt;/h1>
&lt;p>Diese Seite wurde abgerufen am:
   &lt;?php
   $zeitpunkt = date("d.m.Y H:i:s");
   echo $zeitpunkt;
   ?>
&lt;/p>
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
                                        <div class="column">
                                    <pre><code>&lt;!DOCTYPE html>
&lt;html lang="de">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;title>PHP Demo&lt;/title>
&lt;/head>
&lt;body>
&lt;h1>Dies ist ein Test.&lt;/h1>
&lt;p>Diese Seite wurde abgerufen am:
     <?php
     $zeitpunkt = date("d.m.Y H:i:s");
     echo $zeitpunkt;
     ?>&lt;/p>
&lt;/body>
&lt;/html>
</code></pre>
                                        </div>
                                    </div>
                                    <p>
                                        Die <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitte sollten
                                        gültiges <abbr title="Hypertext Markup Language">HTML</abbr> erzeugen, damit der
                                        Browser
                                        den Body der <abbr title="Hypertext Transfer Protocol ">HTTP</abbr> Response
                                        Message korrekt rendern kann.
                                    </p>
                                    <h6 class="title is-6"><abbr title="Hypertext Transfer Protocol ">HTTP</abbr>
                                        Request und Response im Detail</h6>
                                    <p>
                                        Folgende Abbildung zeigt den Ablauf einer
                                        <abbr title="Hypertext Transfer Protocol ">HTTP</abbr> <code>GET</code> Request
                                        Message mit einer darauffolgenden <abbr title="Hypertext Transfer Protocol ">HTTP</abbr>
                                        Response Message unter dem Einsatz des <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreters im Detail.
                                    </p>
                                    <figure class="image">
                                        <img style="width: 75%" src=""
                                             alt="TODO">
                                    </figure>
                                    <ol>
                                        <li> Der Browser schickt eine Anfrage für die Datei <code>index.php</code> an
                                            den
                                            Webserver.
                                        </li>
                                        <li> Der Webserver empfängt die Anfrage und sucht die <abbr
                                                    title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei auf der
                                            Festplatte.
                                        </li>
                                        <li> Der Inhalt der <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei
                                            wird durch den Webserver in den <abbr
                                                    title="Random Access Memory">RAM</abbr>
                                            geladen (Loading).
                                        </li>
                                        <li> Der Inhalt wird an <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                            übergeben. Dieser verarbeitet alle
                                            <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitte aus.
                                        </li>
                                        <li> Das Ergebnis des <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreters
                                            ist <abbr title="Hypertext Markup Language">HTML</abbr>-Code. Der
                                            entstandene
                                            <abbr title="Hypertext Markup Language">HTML</abbr>-Code ist eine
                                            Kombination
                                            aus bestehendem <abbr title="Hypertext Markup Language">HTML</abbr>-Code aus
                                            der
                                            <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Datei (1:1-Kopie) und
                                            <code>echo</code>-Output aus den
                                            <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Abschnitten.
                                        </li>
                                        <li> Das Ergebnis (der <abbr title="Hypertext Markup Language">HTML</abbr>-Code)
                                            ist der Body der Response Message an den
                                            Browser.
                                        </li>
                                    </ol>
                                    <p>
                                        Der Ablauf aus oberen Abbildung zeigt auch,
                                        dass jedes Mal, wenn man eine Webseite mit <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Code aufruft (z.B. auch
                                        durch einen Browser-Refresh), der <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter ausgeführt
                                        wird. Eine
                                        Webseite, welche durch den <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Interpreter
                                        erzeugt wird (wenn auch nur
                                        teilweise), bezeichnet man als <b>dynamische</b> Webseite. Bei einer
                                        <b>statischen</b> Webseite wird lediglich der Inhalt der bereits fertig
                                        existierenden <abbr title="Hypertext Markup Language">HTML</abbr>-Datei an den
                                        Browser übertragen. Nur dynamische
                                        Webseiten erlauben es, dass der Benutzer den Inhalt einer Webseite mitgestalten
                                        kann. Denn durch die Verwendung einer Programmiersprache (wie <abbr
                                                title="PHP: Hypertext Preprocessor">PHP</abbr>) kann man
                                        zum Beispiel Inhalt aus Datenbanken (welche sich ändern können) in die Webseite
                                        einbinden.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <?php
    include("../../footer.php");
    ?>
</footer>
</body>
</html>