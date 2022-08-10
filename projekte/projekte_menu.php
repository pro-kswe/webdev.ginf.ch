<?php
global $base;
?>
<aside class="menu">
    <p class="menu-label">
        Sprachen
    </p>
    <ul class="menu-list">
        <li class="is-right">
            <a href="<?php echo $base; ?>/html/html_main.php#html" class="is-active">
                <i class="fab fa-html5"></i>
                HTML
            </a>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/css/css_main.php#css" class="is-active">
                <i class="fab fa-css3-alt"></i>
                CSS
            </a>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/php/php_main.php#php" class="is-active">
                <i class="fab fa-php"></i>
                PHP
            </a>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/sql/sql_main.php#sql" class="is-active">
                <i class="fas fa-database"></i>
                SQL
            </a>
        </li>
    </ul>
    <p class="menu-label">
        Übungen
    </p>
    <ul class="menu-list">
        <li class="is-right">
            <a href="<?php echo $base; ?>/aufgaben/aufgaben_main.php#aufgaben" class="is-active">
                <i class="fas fa-tasks"></i>
                Aufgaben
            </a>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/projekte/projekte_main.php#projekte" class="is-active">
                <i class="fas fa-project-diagram"></i>
                Projekte
            </a>
            <ul>
                <li>
                    <a href="<?php echo $base; ?>/projekte/html/projekte_html.php#projekteHtml"
                       class="<?php echo isset($isActive) && $isActive == "projekteHtml" ? "has-background-grey-lighter" : "" ?>">
                        Teil 1 (HTML)
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/projekte/css/projekte_css.php#projekteCss"
                       class="<?php echo isset($isActive) && $isActive == "projekteCss" ? "has-background-grey-lighter" : "" ?>">
                        Teil 2 (CSS)
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <p class="menu-label">
        Demo-Websites
    </p>
    <ul class="menu-list">
        <li class="is-right">
            <a href="<?php echo $base; ?>/demo/html/index.html" class="is-active">
                <i class="fab fa-html5"></i>
                HTML (Rom)
            </a>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/demo/css/index.html" class="is-active">
                <i class="fab fa-css3-alt"></i>
                CSS (Zürich)
            </a>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/demo/php/index.php" class="is-active">
                <i class="fab fa-php"></i>
                PHP (Zürich)
            </a>
        </li>
    </ul>
</aside>