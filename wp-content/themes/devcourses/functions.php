<?php 
function devcourses_setup(){

    //Featured Images
    add_theme_support('post-thumbnails');

    // Title Tag for SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'devcourses_setup');
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


// Filtrar productos de wc por usuario
function filtro_productos_por_usuario($query) {
    // Verificar que la consulta principal es para los productos
    if ($query->is_main_query() && $query->is_post_type_archive('product') && is_user_logged_in()) {
        // Obtener el ID del usuario actual
        $user_id = get_current_user_id();

        // Establecer el parámetro 'author' para filtrar los productos por el usuario actual
        $query->set('author', $user_id);
    }
}
add_action('pre_get_posts', 'filtro_productos_por_usuario');
