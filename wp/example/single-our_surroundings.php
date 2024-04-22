<?php
/*
    Template Name: Our Surroundings Single
*/
get_header();

if (have_posts()):
    while (have_posts()):
        the_post();
        ?>

        <h1>
            <?php the_title(); ?>
        </h1>
    <?php endwhile;
    wp_reset_postdata(); endif;
get_footer(); ?>