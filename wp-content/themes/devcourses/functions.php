<?php 

function devcourses_menus() {
    register_nav_menus( array(
        'main-menu' => __('Main Menu', 'devcourses'),
    ));
}

add_action('init', 'devcourses_menus');


function devcourses_scripts_styles(){

    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('main', get_stylesheet_uri(), array('normalize'), '1.0.0' );
}

add_action('wp_enqueue_scripts', 'devcourses_scripts_styles');