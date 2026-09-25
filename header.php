<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- Activa las funciones escritas en functions.php, como la hoja de estilo -->
</head>

<body <?php body_class(); ?>>
    <!-- Esta función activa el body de wordpress, y es necesario agregarla en el index.php para que funcione correctamente.-->
    <?php wp_body_open(); ?> <!--Esta función activa el body de wordpress, y es necesario agregarla en el
                            index.php para que funcione correctamente.-->


    <header>

        <?php wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'menu_id' => 'primary-menu',
        )); ?>


    </header>