<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: Kontakt</title>
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
                        <h4 class="title is-4">Kontakt</h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">E-Mail</h5>
                                <p>
                                    Sie können uns gerne über dieses Kontaktformular anschreiben. Wir antworten
                                    umgehend.
                                </p>
                                <form method="post" action="send.php">
                                    <div class="field">
                                        <label class="label" for="vorname">Vorname</label>
                                        <div class="control">
                                            <input id="vorname" name="vorname" class="input" placeholder="Ihr Vorname"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="nachname">Nachname</label>
                                        <div class="control">
                                            <input id="nachname" name="nachname" class="input"
                                                   placeholder="Ihr Nachname" required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="email">E-Mail-Adresse</label>
                                        <div class="control has-icons-left">
                                            <input id="email" name="email" class="input" type="email"
                                                   placeholder="Ihre E-Mail-Adresse" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label" for="nachricht">Nachricht</label>
                                        <div class="control">
                                            <textarea id="nachricht" name="nachricht" class="textarea"
                                                      placeholder="Ihre Nachricht" required></textarea>
                                        </div>
                                        <p class="help">
                                            Wir möchten an dieser Stelle auf die <a href="privacy.php">Datenschutzerklärung</a>
                                            hinweisen.
                                        </p>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <button class="button is-info">Abschicken</button>
                                        </div>
                                    </div>
                                </form>
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