<?php
header("refresh:3;url=index.php");
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: E-Mail verschickt</title>
</head>
<?php
$httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
global $base;
$base = $httpProtocol . '://' . $_SERVER['HTTP_HOST'] . '/';
?>
<body>
<header>
    <?php
    include("header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php include("menu.php"); ?>
                </div>
                <div id="contact" class="column is-9">
                    <div class="content">
                        <h4 class="title is-4">E-Mail verschickt</h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Vielen Dank!</h5>
                                <p>
                                    Wir werden uns umgehend bei Ihnen melden.
                                </p>
                                <p>
                                    Sie werden in 3 Sekunden zur Startseite weitergeleitet...
                                </p>
                                <?php
                                $message = wordwrap($_POST["nachricht"], 70, "\r\n");

                                $headers = "From: " . $_POST["email"] . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();

                                $subject = "Kontaktformular: " . $_POST["vorname"] . " " . $_POST["nachname"];

                                mail('info@webdev.ginf.ch', $subject, $message, $headers);

                                ?>
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
    include("footer.php");
    ?>
</footer>
</body>
</html>