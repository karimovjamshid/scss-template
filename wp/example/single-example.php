<?php
    get_header();
    
?>


<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>


<?php the_content() ?>

<?php get_template_part('template-parts/block', 'layouts');  ?>

<?php endwhile; wp_reset_postdata(); endif; ?>


<?php get_footer(); ?>