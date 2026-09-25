<?php 

get_header( );   

?> 


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

    <?php get_footer(); ?>

</body>

</html>