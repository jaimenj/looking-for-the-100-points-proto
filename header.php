<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/style.css">
    <?php
    if(is_user_logged_in()) {
        ?>
        <style>
            body {margin-top: 32px;}
            @media (max-width: 782px) { body {margin-top: 46px;} }
        </style>
        <?php
    } 
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class('container-fluid'); ?>>

<?php 
wp_body_open();
?>
