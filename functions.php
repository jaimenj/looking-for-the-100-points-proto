
<?php

wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', [], '', true);
wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', ['jquery'], '', true);
wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', ['jquery', 'popper'], '', true);
wp_enqueue_script('main', get_template_directory_uri().'/main.min.js', ['jquery', 'poper', 'bootstrap'], '', true);

add_theme_support('title-tag');
