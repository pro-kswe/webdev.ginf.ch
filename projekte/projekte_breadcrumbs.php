<?php
global $base;
?>
<nav class="breadcrumb has-succeeds-separator is-right" aria-label="breadcrumbs">
    <ul>
        <li>
            <a href="<?php echo $base; ?>/projekte/projekte_main.php#projekte">Projekte</a>
        </li>
        <?php
        if (isset($isActive) && $isActive == "projekteHtml") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/projekte/projekte_html/projekte_html.php#projekteHtml">Teil 1 (HTML)</a>
            </li>
        <?php } ?>
        <?php
        if (isset($isActive) && $isActive == "projekteCss") {
            ?>
            <li class="is-active">
                <a href="<?php echo $base; ?>/projekte/projekte_css/projekte_css.php#projekteCss">Teil 2 (CSS)</a>
            </li>
        <?php } ?>
    </ul>
</nav>