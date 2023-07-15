<?php
if(!defined('ABSPATH')) die();



?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header container" id="header">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo get_permalink()?>">
                <figure class="logo-figure">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Logo image" width="150"
                        loading="lazy" class="logo-figure__image">
                </figure>
                </a>
                
            </div>
            <?php

            $args = array(
                'menu' => 'main-menu',
                'theme_location' => 'main-menu',
                'container' => 'nav',
                'container_class' => 'menu-container nav',
                'menu_class' => 'menu-content',
                'menu_id' => 'mainMenu',
            );

            wp_nav_menu($args);
            ?>
        </div>
    </header>