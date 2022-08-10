<?php
global $base;
?>
<nav class="breadcrumb has-succeeds-separator is-right" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="<?php echo $base; ?>/html/html_main.php#html">HTML</a>
        </li>
        <?php
        if (isset($isActive) && $isActive == "Grundgerüst") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/grundgeruest/grundgeruest.php#grundgeruest">Grundgerüst</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Rendering") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/rendering/rendering.php#rendering">Rendering</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Syntax") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/syntax/syntax.php#syntax">Syntax</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Struktur") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/struktur/struktur.php#struktur">Webseitenstruktur</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Textformatierung") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/textformatierung/textformatierung.php#textformatierung">Textformatierung</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Listen") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/listen/listen.php#listen">Listen</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Links") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/links/links.php#links">Links</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Bilder") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/bilder/bilder.php#bilder">Bilder</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Tabellen") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/tabellen/tabellen.php#tabellen">Tabellen</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Formulare") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/html/formulare/formulare.php#formulare">Formulare</a>
            </li>
        <?php } ?>
    </ul>
</nav>