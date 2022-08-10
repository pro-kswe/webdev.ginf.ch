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
                <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>
            </a>
            <ul>
                <li>
                    <a href="<?php echo $base; ?>/php/php_dateien/php_dateien.php#phpDateien"
                       class="<?php echo isset($isActive) && $isActive == "phpDateien" ? "has-background-grey-lighter" : "" ?>">
                        Dateien
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/php/php_verarbeitung/php_verarbeitung.php#phpVerarbeitung"
                       class="<?php echo isset($isActive) && $isActive == "phpVerarbeitung" ? "has-background-grey-lighter" : "" ?>">
                        Verarbeitung
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/php/ausgabe/ausgabe.php#ausgabe"
                       class="<?php echo isset($isActive) && $isActive == "Ausgabe" ? "has-background-grey-lighter" : "" ?>">
                        Ausgabe
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/php/variablen/variablen.php#variablen"
                       class="<?php echo isset($isActive) && $isActive == "Variablen" ? "has-background-grey-lighter" : "" ?>">
                        Variablen
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/php/funktionen/funktionen.php#funktionen"
                       class="<?php echo isset($isActive) && $isActive == "Funktionen" ? "has-background-grey-lighter" : "" ?>">
                        Funktionen
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/php/bedingte_anweisungen/bedingte_anweisungen.php#bedingteAnweisungen"
                       class="<?php echo isset($isActive) && $isActive == "bedingteAnweisungen" ? "has-background-grey-lighter" : "" ?>">
                        Bedingte Anweisungen
                    </a>
                </li>
            </ul>
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