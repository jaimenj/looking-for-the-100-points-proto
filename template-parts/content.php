<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php
    if (!is_front_page()) {
        get_template_part('template-parts/block-entry-header');
    }
    ?>

    <div class="post-inner">
        <div class="entry-content">

            <?php
            if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
                the_excerpt();
            } else {
                the_content('Continuar leyendo..');
            }
            ?>

        </div>
    </div>

    <div class="section-inner">
        <?php
        wp_link_pages(
            [
                'before' => '<nav class="post-nav-links bg-light-background" aria-label="Página"><span class="label">Páginas</span>',
                'after' => '</nav>',
                'link_before' => '<span class="page-number">',
                'link_after' => '</span>',
            ]
        );

        edit_post_link();
        ?>

    </div>

    <?php

    if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
        ?>
        <div class="comments-wrapper section-inner">
            <?php comments_template(); ?>
        </div>
        <?php
    }
    ?>


</article>

