<?php
/**
 * Template Name: A custom template
 */

defined('ABSPATH') or die();

function customize_head() {
    ?>
    <script src="somewhere.js"></script>
    <link href="somewhere.css" rel="stylesheet">
    <?php
}
add_action('wp_head', 'customize_head');

get_header();

?>

<h1><?= get_the_title() ?></h1>

<p>Content of the page..</p>

<?php

get_footer();