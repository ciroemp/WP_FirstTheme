<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaColo Theme</title>
    <?php wp_head(); ?> <!-- Activa las funciones escritas en functions.php, como la hoja de estilo -->
</head>

<body>
    <?php wp_body_open(); ?> <!--Esta función activa el body de wordpress, y es necesario agregarla en el

                        index.php para que funcione correctamente.-->

    <div class="container">
        <div class="row justify-content-center">

            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>

                    <!-- Cada post vive en su propia columna -->
                    <div class="col-6 mb-4">
                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; else: ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>

</body>

</html>