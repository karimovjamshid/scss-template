<?php
/*
    Template Name: Services Single
*/
    get_header();

    if ( have_posts() ) :
    while ( have_posts() ) : the_post();

//  <!-- All layouts -->
    get_template_part('template-parts/block', 'layouts'); 
?>



<?php endwhile; wp_reset_postdata(); endif; get_footer(); ?>