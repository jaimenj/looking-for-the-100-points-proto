<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body class="container-fluid">
