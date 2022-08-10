<?php
global $base;
?>
<nav class="breadcrumb has-succeeds-separator is-right" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="<?php echo $base; ?>/aufgaben/aufgaben_main.php#aufgaben">Aufgaben</a>
        </li>
        <?php
        if (isset($isActive) && $isActive == "AufgabenPhpGrundlagen") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/aufgaben/php/grundlagen/grundlagen.php#aufgabenPhpGrundlagen">PHP-Grundlagen</a>
            </li>
        <?php } ?>
    </ul>
</nav>