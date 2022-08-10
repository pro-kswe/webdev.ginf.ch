<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Reiseblog: Home</title>
</head>
<body>
<header>
    <img src="images/rom_wappen.png" alt="Wappen von Rom">
    <h1>Reisetipps für Rom</h1>
    <?php
    if (isset($_COOKIE["besucher"])) {
        $vorname = $_COOKIE["besucher"];
        echo "<h3>Willkommen $vorname!</h3>";
    } else {
        echo "<h3>Willkommen</h3>";
    }
    ?>
    <nav>
        <ul>
            <li><a href="#allgemeines">Allgemeines</a></li>
            <li><a href="#anreise">Anreise</a></li>
            <li><a href="#sehenswuerdigkeiten">Sehenswürdigkeiten</a></li>
            <li><a href="anmeldung.html">Anmeldung zur Free-Walking-Tour</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id="allgemeines">
        <h2>Allgemeines</h2>
        <p>
            <a href="https://de.wikipedia.org/wiki/Rom">Rom</a> liegt am Tiber und wird auch <i>Ewige Stadt</i> genannt.
            Es leben rund 2,8 Millionen Einwohner in der Hauptstadt Italiens. Rom ist in fünfzehn Stadtbezirke (<i>Munizipien</i>)
            aufgeteilt. Die Stadt wurde gemäss einer Sage am 21. April 753 vor Christus von Remus auf einem der sieben
            Hügel gegründet. Rom wurde im Jahr 1980 von der <abbr
                    title="United Nations Educational, Scientific and Cultural Organization">UNESCO</abbr> zum <b>Weltkulturerbe</b>
            erklärt. Das historische Zentrum ist gewissermassen ein grosses, begehbares Museum. Da es im Sommer sehr
            heiss werden kann, empfiehlt sich ein Besuch im Frühjahr oder Herbst.
        </p>
        <figure>
            <blockquote cite="https://de.wikiquote.org/wiki/Rom">
                Es gibt drei Hügel, von denen das Abendland seinen Ausgang genommen hat: Golgatha, die Akropolis in
                Athen, das Capitol in Rom. Aus allen ist das Abendland geistig gewirkt, und man darf alle drei, man muss
                sie als Einheit sehen.
            </blockquote>
            <figcaption>— Theodor Heuss <cite>Reden an die Jugend, Tübingen 1956</cite></figcaption>
        </figure>
    </section>
    <section id="anreise">
        <h2>Anreise</h2>
        <ul>
            <li>
                Flugzeug: Es gibt drei Flughäfen in Rom. Von der Schweiz ist der Flughafen Roma-Fiumicino <i>Leonardo da
                    Vinci</i> optimal angebunden. Es werden zahlreiche internationale Verbindungen angeboten.
            </li>
            <li>
                Zug: Der Hauptbahnhof von Rom (Roma Termini) ermöglicht eine internationale Anreise. Man kann zum
                Beispiel sehr einfach von Zürich über Lugano und Mailand nach Rom reisen. Die Reisedauer beträgt etwa
                sieben Stunden.
            </li>
            <li>
                Auto: Autostrada A1 ab Mailand über Bologna und Florenz. Aus dem Ausland führen zahlreiche Strassen nach
                Mailand. Bei der Benutzung der Autobahn ist an die Mautgebühr zu denken.
            </li>
        </ul>
    </section>
    <section id="sehenswuerdigkeiten">
        <h2>Sehenswürdigkeiten</h2>
        <ol>
            <li>
                <p>
                    Kolosseum
                </p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Colosseo_2020.jpg/640px-Colosseo_2020.jpg"
                     alt="Kolosseum">
            </li>
            <li>
                <p>
                    Fontana di Trevi
                </p>
                <img src="images/trevi_brunnen.jpg" alt="Fontana di Trevi">
            </li>
            <li>
                <p>
                    Vatikanstadt
                </p>
                <img src="images/vatikanstadt.png" alt="Vatikanstadt">
            </li>
        </ol>
    </section>
</main>
</body>
</html>