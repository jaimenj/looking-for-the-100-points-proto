
<?php

wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', [], null);
wp_enqueue_style('main', get_template_directory_uri().'/css/main.min.css', ['bootstrap'], null);

wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', [], '', true);
wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', ['jquery'], '', true);
wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', ['jquery', 'popper'], '', true);
wp_enqueue_script('main', get_template_directory_uri().'/main.min.js', [], '', true);

add_theme_support('title-tag');
add_theme_support('custom-logo', [
    'height' => 100,
    'width' => 100,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => ['JnjSite.com', 'Entre bastidores de un apasionado de la informática'],
]);

/*add_filter('style_loader_tag', 'filter_preload_css_header', 10, 4);
function filter_preload_css_header($html, $handle)
{
    //if ('my-style-handle' === $handle) {
        return str_replace("rel='stylesheet'", "rel='preload' as='style'", $html);
    //}

    return $html;
}*/

register_sidebar([
    'name' => 'Footer left',
    'id' => 'sidebar-footer-left',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
]);

register_sidebar([
    'name' => 'Footer center',
    'id' => 'sidebar-footer-center',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
]);

register_sidebar([
    'name' => 'Footer right',
    'id' => 'sidebar-footer-right',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
]);
