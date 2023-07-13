<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header class="header container" id="header">
<div class="header-content">
    <div class="header-logo">
        <figure>
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Logo image" width="200"
                loading="lazy">
        </figure>
    </div>
    <?php

        $args = array(
            'theme_location' => 'main-menu'
        );

        wp_nav_menu($args);
    ?>
</div>
</header>