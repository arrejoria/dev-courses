<?php 
// Inicializar theme supports
function devcourses_setup(){
    //Imagenes destacadas para CPT Cursos
    add_theme_support('post-thumbnails');
    // Title Tag para SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'devcourses_setup');
function devcourses_menus() {
    // Registrar Menu Principal de Navegación
    register_nav_menus( array(
        'main-menu' => __('Main Menu', 'devcourses'),
    ));
}

add_action('init', 'devcourses_menus');


function devcourses_scripts_styles(){
    // Registrar estilos y scripts al theme
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('main', get_stylesheet_uri(), array('normalize'), '1.0.0' );
}

add_action('wp_enqueue_scripts', 'devcourses_scripts_styles');


// Filtrar productos de wc por usuario
function filtrar_cursos_por_usuario($query) {
    // Verificar que la consulta principal es para los productos en el administrador
    if (is_admin() && $query->is_main_query() && $query->get('post_type') === 'product') {
        // Obtener el ID del usuario actual
        $user_id = get_current_user_id();

        // Establecer el parámetro 'author' para filtrar los productos por el usuario actual
        $query->set('author', $user_id);
    }
}
add_action('pre_get_posts', 'filtrar_cursos_por_usuario');


function agregar_rol_developer() {
    // Registrar capacidades para el rol developer
    $rol_slug = 'developer';
    $rol_nombre = 'Developer';
    $rol_capacidades = array(
        'read' => true,
        'edit_posts' => true,
        'publish_devcourses_cursos' => true,
        'edit_published_devcourses_cursos' => true,
        'delete_devcourses_cursos' => true,
        'upload_files' => true,
    );

    add_role($rol_slug, $rol_nombre, $rol_capacidades);
}
add_action('init', 'agregar_rol_developer');
