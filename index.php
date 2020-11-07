<?php
get_header();

if (is_front_page()) {
    get_template_part('template-parts/home-carousel');
}
?>

<?php // START ADDS -->
if($_SERVER['REQUEST_URI'] != '/'
and strpos($_SERVER['REQUEST_URI'], 'consultoria-asesoramiento-informatico') === false
and strpos($_SERVER['REQUEST_URI'], 'diseno-programacion-gestion-proyectos-web') === false
and strpos($_SERVER['REQUEST_URI'], 'seo-sem-y-marketing-para-webs') === false
and strpos($_SERVER['REQUEST_URI'], 'administracion-de-servidores') === false
and strpos($_SERVER['REQUEST_URI'], 'administracion-de-estaciones-de-trabajo-y-ordenadores-personales') === false
and strpos($_SERVER['REQUEST_URI'], 'sistemas-embebidos') === false
and strpos($_SERVER['REQUEST_URI'], 'portfolio') === false
and strpos($_SERVER['REQUEST_URI'], 'contacto') === false
and !preg_match('/127.0.0.1/', $_SERVER['REMOTE_ADDR'])
) { ?>
	<div class="ads-wrapper" id="21295-1" style="min-height: 100px; text-align: center;"><script src="//ads.themoneytizer.com/s/gen.js?type=1"></script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=21295&formatId=1" ></script></div>
<?php }
//<-- END ADDS ?>


<div class="container">
    <div class="row">
        <div class="col-md-9">

            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif;
            ?>

<?php // START ADDS -->
if($_SERVER['REQUEST_URI'] != '/'
and strpos($_SERVER['REQUEST_URI'], 'consultoria-asesoramiento-informatico') === false
and strpos($_SERVER['REQUEST_URI'], 'diseno-programacion-gestion-proyectos-web') === false
and strpos($_SERVER['REQUEST_URI'], 'seo-sem-y-marketing-para-webs') === false
and strpos($_SERVER['REQUEST_URI'], 'administracion-de-servidores') === false
and strpos($_SERVER['REQUEST_URI'], 'administracion-de-estaciones-de-trabajo-y-ordenadores-personales') === false
and strpos($_SERVER['REQUEST_URI'], 'sistemas-embebidos') === false
and strpos($_SERVER['REQUEST_URI'], 'portfolio') === false
and strpos($_SERVER['REQUEST_URI'], 'contacto') === false
and strpos($_SERVER['REQUEST_URI'], 'miscellanous-scripts-for-wordpress') === false
and !preg_match('/127.0.0.1/', $_SERVER['REMOTE_ADDR'])
) { ?>
	<div class="ads-wrapper" id="21295-28"><script src="//ads.themoneytizer.com/s/gen.js?type=28"></script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=21295&formatId=28"></script></div>
<?php }
//<-- END ADDS ?>

        </div>
        <div class="col-md-3">

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php

get_footer();
