<?php
global $base;
?>
<nav class="breadcrumb has-succeeds-separator is-right" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="<?php echo $base; ?>/php/php_main.php#php">PHP</a>
        </li>
        <?php
        if (isset($isActive) && $isActive == "phpDateien") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/php/php_dateien/php_dateien.php#phpDateien">Dateien</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "phpVerarbeitung") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/php/php_verarbeitung/php_verarbeitung.php#phpVerarbeitung">Verarbeitung</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Ausgabe") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/php/php_ausgabe/php_ausgabe.php#ausgabe">Ausgabe</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Variablen") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/php/variablen/variablen.php#variablen">Variablen</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Funktionen") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/php/funktionen/funktionen.php#funktionen">Funktionen</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "bedingteAnweisungen") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/php/bedingte_anweisungen/bedingteAnweisungen.php#bedingteAnweisungen">Bedingte
                    Anweisungen</a>
            </li>
        <?php } ?>
    </ul>
</nav>