<?php

defined('ABSPATH') or die();

get_header();

if (is_front_page()) {
    get_template_part('template-parts/home-carousel');
}

// Is category or tag page..
if (is_category()) {
    ?>
    <div class="container-fluid category-description">
        <div class="container">
            <h1 class="text-center"><?= single_cat_title(); ?></h1>
            <?= category_description(); ?>
        </div>
    </div>
    <?php
} elseif (is_tag()) {
    ?>
    <div class="container-fluid tag-description">
        <div class="container">
            <h1 class="text-center"><?= single_tag_title() ?></h1>
            <?= tag_description(); ?>
        </div>
    </div>
    <?php
} elseif (is_home()) {
    ?>
    <div class="container-fluid is-home-blog">
        <h1 class="text-center"><?= get_queried_object()->post_title ?></h1>
    </div>
    <?php
}

// Featured image..
if (have_posts()
and is_singular()
and !is_search()
and !is_front_page()) {
    get_template_part('template-parts/block-featured-image');
}

// START ADDS -->
if ('/' != $_SERVER['REQUEST_URI']
and false === strpos($_SERVER['REQUEST_URI'], 'consultoria-asesoramiento-informatico')
and false === strpos($_SERVER['REQUEST_URI'], 'diseno-programacion-gestion-proyectos-web')
and false === strpos($_SERVER['REQUEST_URI'], 'seo-sem-y-marketing-para-webs')
and false === strpos($_SERVER['REQUEST_URI'], 'administracion-de-servidores')
and false === strpos($_SERVER['REQUEST_URI'], 'administracion-de-estaciones-de-trabajo-y-ordenadores-personales')
and false === strpos($_SERVER['REQUEST_URI'], 'sistemas-embebidos')
and false === strpos($_SERVER['REQUEST_URI'], 'portfolio')
and false === strpos($_SERVER['REQUEST_URI'], 'contacto')
and !preg_match('/127.0.0.1/', $_SERVER['REMOTE_ADDR'])
) { ?>
	<div class="ads-wrapper ads-wrapper-entry-posts-before" id="21295-1" style="min-height: 100px; text-align: center;"><script src="//ads.themoneytizer.com/s/gen.js?type=1"></script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=21295&formatId=1" ></script></div>
<?php }
//<-- END ADDS?>

<div class="container">
    <div class="row row-container-posts">
        <div class="col-md-9">

            <?php
            if (have_posts()) {
                $there_is_previous = false;
                while (have_posts()) {
                    the_post(); // Prepare data..

                    if ($there_is_previous) {
                        echo '<hr>';
                    }

                    //echo get_post_type();
                    get_template_part('template-parts/content', get_post_type());

                    $there_is_previous = true;
                }

                the_posts_pagination([
                    'mid_size' => 5,
                    'prev_text' => '« Anterior',
                    'next_text' => 'Siguiente »',
                ]);
            } else {
                ?><p>Lo siento, no hay contenidos con ese criterio..</p><?php
            }
            ?>

<?php // START ADDS -->
if ('/' != $_SERVER['REQUEST_URI']
and false === strpos($_SERVER['REQUEST_URI'], 'consultoria-asesoramiento-informatico')
and false === strpos($_SERVER['REQUEST_URI'], 'diseno-programacion-gestion-proyectos-web')
and false === strpos($_SERVER['REQUEST_URI'], 'seo-sem-y-marketing-para-webs')
and false === strpos($_SERVER['REQUEST_URI'], 'administracion-de-servidores')
and false === strpos($_SERVER['REQUEST_URI'], 'administracion-de-estaciones-de-trabajo-y-ordenadores-personales')
and false === strpos($_SERVER['REQUEST_URI'], 'sistemas-embebidos')
and false === strpos($_SERVER['REQUEST_URI'], 'portfolio')
and false === strpos($_SERVER['REQUEST_URI'], 'contacto')
and false === strpos($_SERVER['REQUEST_URI'], 'miscellanous-scripts-for-wordpress')
and !preg_match('/127.0.0.1/', $_SERVER['REMOTE_ADDR'])
) { ?>
	<div class="ads-wrapper ads-wrapper-entry-posts-after" id="21295-28"><script src="//ads.themoneytizer.com/s/gen.js?type=28"></script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=21295&formatId=28"></script></div>
<?php }
//<-- END ADDS?>

        </div>
        <div class="col-md-3">

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php

// Navigation..
if (!is_front_page()
and is_singular()) {
    get_template_part('template-parts/block-navigation');
}

get_footer();
