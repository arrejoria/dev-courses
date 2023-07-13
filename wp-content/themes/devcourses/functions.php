<?php 


function devcourses_menus() {
    register_nav_menus( array(
        'main-menu' => __('Main Menu', 'devcourses')
    ));
}

add_action('init', 'devcourses_menus');