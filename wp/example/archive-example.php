<?php

get_header(); ?>

<!-- All layouts -->
<?php 

$cat = get_queried_object();
$acf_key = $cat->taxonomy . '_'. $cat->term_id;

get_template_part('template-parts/block', 'layouts', [ 'acf_key' => $acf_key  ]); ?>


<!-- News -->
<section class="news">
    <div class="container">
        <div class="news__wrapper">
            <?php if ( have_posts() ) : ?>
                <?php $duration = 600; while ( have_posts() ) :
                    the_post();
                ?>
                    <div class="news-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $duration; ?>">
                        <div class="news-card__img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img" alt="" />
                        </div>
                        <footer class="news-card__footer">
                            <h4 class="news-card__h4"><?php the_title(); ?></h4>
                            <div class="news-card__date"><?php echo get_the_date( 'M j', $post->ID ); ?></div>
                            <p class="news-card__text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn">Learn more</a>
                        </footer>
                    </div>
                <?php $duration = $duration + 300; endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        <!-- Pagination -->
        <?php the_posts_pagination(); ?> 
    </div>
</section>


<?php get_footer(); ?>