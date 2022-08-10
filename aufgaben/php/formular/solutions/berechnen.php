<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Taschenrechner: Ergebnis</title>
</head>
<body>
<header>
    <h1>Taschenrechner: Ergebnis</h1>
    <nav>
        <ul>
            <li>
                <a href="taschenrechner.html">Taschenrechner</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <section>
        <p>
            <?php
            $zahl1 = $_POST["zahl1"];
            $zahl2 = $_POST["zahl2"];
            $ergebnis = $zahl1 + $zahl2;
            echo "Das Ergebnis von $zahl1 plus $zahl2 lautet $ergebnis.";
            ?>
        </p>
    </section>
</main>
</body>
</html>