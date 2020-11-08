<header class="entry-header">
    <div class="entry-header-inner section-inner medium">
        <?php

        if (is_singular()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title('<h2 class="entry-title heading-size-1"><a href="'.esc_url(get_permalink()).'">', '</a></h2>');
        }

        ?>
        <div class="entry-categories">
            <div class="entry-categories-inner">
                Categorías: <?php the_category(' / '); ?>
            </div>
        </div>
        <?php

        $intro_text_width = '';
        if (is_singular()) {
            $intro_text_width = ' small';
        } else {
            $intro_text_width = ' thin';
        }

        if (has_excerpt() && is_singular()) {
            ?>
            <div class="intro-text section-inner max-percentage<?php echo $intro_text_width; ?>">
                <?php the_excerpt(); ?>
            </div>
            <?php
        }
        ?>
    </div>
</header>
