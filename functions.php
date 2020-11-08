
<?php

require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';

wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', [], null);
wp_enqueue_style('main', get_template_directory_uri().'/css/main.min.css', ['bootstrap'], null);

wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', [], '', true);
wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', [], '', true);
wp_enqueue_script('main', get_template_directory_uri().'/js/main.min.js', [], '', true);

add_theme_support('title-tag');
add_theme_support('custom-logo', [
    'height' => 100,
    'width' => 100,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => ['JnjSite.com', 'Entre bastidores de un apasionado de la informática'],
]);
add_theme_support('post-thumbnails');
add_theme_support('post-formats');
add_theme_support('post-html5');
add_theme_support('responsive-embeds');
add_theme_support('wp-block-styles');
/*
 * More theme support available:
 * 'post-formats', 'post-thumbnails', 'custom-header', 'custom-background', 'custom-logo',
 * 'menus', 'automatic-feed-links', 'html5', 'title-tag', 'customize-selective-refresh-widgets',
 * 'starter-content', 'responsive-embeds', 'align-wide', 'dark-editor-style', 'disable-custom-colors',
 * 'disable-custom-font-sizes', 'editor-color-palette', 'editor-font-sizes', 'editor-styles',
 * 'wp-block-styles', and 'core-block-patterns'.
 *  */

register_nav_menus([
    'header-menu' => 'Menú principal',
]);

register_sidebar([
    'name' => 'Main sidebar',
    'id' => 'sidebar-main',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
]);

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
