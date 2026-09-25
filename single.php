<?php wp_head(  ); ?>  <!-- Activa las funciones escritas en functions.php, como la hoja de estilo -->
<?php wp_body_open(  ); ?>  <!-- Esta función activa el body de wordpress, y es necesario agregarla en el index.php para que funcione correctamente.-->


<div class="container single p-5">
    <div class="row">
        <div class="col">

        <?php the_title( '<h1>', '</h1>' ); ?>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>

        </div>
    </div>
</div>