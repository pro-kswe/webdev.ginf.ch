<?php
global $base;
?>
<nav class="breadcrumb has-succeeds-separator is-right" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="<?php echo $base; ?>/css/css_main.php#css">CSS</a>
        </li>
        <?php
        if (isset($isActive) && $isActive == "Klassen") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/css/klassen/klassen.php#klassen">Klassen</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "Bulma") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/css/bulma/bulma.php#bulma">Bulma</a>
            </li>
        <?php } ?>
    </ul>
</nav>