<?php
/* Consultas reutilizables */
require get_template_directory() . '/inc/queries.php';
function gymfit_setup()
{
     /* agrega imagenes destacadas */
     add_theme_support("post-thumbnails");
     /* agrega tamaño personalizados */
     /* Nota: si hay imagenes subidas usa la el plugin Regenerate Thumbnails */
     add_image_size('square', 350, 350, true);
     add_image_size('portrait', 350, 724, true);
     add_image_size('cajas', 400, 375, true);
     add_image_size('mediano', 700, 400, true);
     add_image_size('blog', 966, 644, true);
}
/* after_setup_theme al activar el theme o algun cambio*/
add_action('after_setup_theme', 'gymfit_setup');
/* Activo los menus de navegacion  */
function gymfit_menus()
{
     // crea -> asigna menus->guarda -> asigna al creado 
     register_nav_menus(array(
          "menu_principal" => __("Menu Principal", "Gym")
     ));
}
/* la agrego al iniciar en wordpress */
add_action('init', "gymfit_menus");

/* funcion para agregar el css */
function gymfit_scripts_styles()
{    //en array(dependencies)
     wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
     wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');
     wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Open+Sans:wght@300&family=Raleway:wght@400;700;900&family=Staatliches&display=swap.css', array(), '1.0.0');
     /* get_stylesheet_uri() obtiene la direccion del style.css base */
     wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

     /* wp_enqueue_script es para agregar scripts */
     wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array("jquery"), '1.0.0', true);
     wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array("jquery", "slicknavJS"), '1.0.0', true);
}
/* agrega el css a wordpress */
add_action('wp_enqueue_scripts', "gymfit_scripts_styles");
function gymfit_widgets()
{
     register_sidebar(array(

          'name' => 'Sidebar 1', //nokmbre
          'id' => 'sidebar_1', //id
          'before_widget' => '<div class="widget">', //antes de el widget
          'after_widget' => '</div>',
          'before_title' => '<h3 class="text-center texto-primario">', //antes del titulo
          'after_title' => '</h3>'
     ));
     register_sidebar(array(

          'name' => 'Sidebar 2',
          'id' => 'sidebar_2',
          'before_widget' => '<div class="widget">',
          'after_widget' => '</div>',
          'before_title' => '<h3 class="text-center texto-primario">',
          'after_title' => '</h3>'
     ));  
}
add_action('widgets_init', 'gymfit_widgets');
