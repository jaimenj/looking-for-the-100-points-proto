<?php

defined('ABSPATH') or die();

if (has_post_thumbnail() && !post_password_required()) {
    //var_dump(get_the_post_thumbnail());
    ?>
    <figure class="featured-image-figure" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
        <?php
        //the_post_thumbnail();
        $caption = get_the_post_thumbnail_caption();
        if ($caption) {
            ?>
            <figcaption class="featured-image-caption"><?php echo wp_kses_post($caption); ?></figcaption>
            <?php
        } ?>

    </figure>
    <?php
}
