<?php

/** En wordpress no se agrega la ruta de estilo en el index con un href.
 * 
 * agregamos la hoja de estilo del tema
 */



function lacolo_theme_scripts(){

    /* wp_enqueue_style( 'style.css', get_stylesheet_uri() ); */  /*Esta función activa la hoja de estilo del tema, pero no es necesario agregarla en el index.php*/
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' );  /*Esta función activa la hoja de estilo del tema, pero no es necesario agregarla en el index.php*/
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );  /*Esta función activa la hoja de estilo del tema, pero no es necesario agregarla en el index.php*/

}

    add_action( 'wp_enqueue_scripts', 'lacolo_theme_scripts' );


function lacolo_theme_setup()
{

    add_theme_support('post-thumbnails');

    register_nav_menus( 
        array(
            'menu-1' => esc_html__('Primary', 'LaColo-Theme'),
        )
    );

}

add_action('after_setup_theme', 'lacolo_theme_setup');



?>