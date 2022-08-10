<div class="field is-grouped is-grouped-multiline is-pulled-right">
    <?php
    global $links;
    foreach ($links as $name => $link) {
        ?>
        <div class="control">
            <div class="tags has-addons">
                <a class="tag is-link"
                   href="<?php echo $link; ?>">
                    <?php echo $name; ?>
                </a>
                <span class="tag is-light">
                <i class="fas fa-lg fa-external-link-alt"></i>
            </span>
            </div>
        </div>
    <?php } ?>
</div>