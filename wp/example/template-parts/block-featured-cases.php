    <!-- Other case studies -->
<section class="other-cases">
    <div class="container">
        <h3 class="other-cases__h3"><?php echo get_sub_field('case_studies_posts_title'); ?></h3>
        <div class="other-cases__wrapper">
            <?php
                $featured_posts = get_sub_field('featured_cases');
                if( $featured_posts ): ?>
                    <?php $delay = 200; foreach( $featured_posts as $post ): 
                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                        <div class="other-cases-card">
                            <div class="other-cases-card__img">
                                <?php if(get_the_post_thumbnail_url($post->ID, 'full')): ?>
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="" class="img" />
                                <?php endif; ?>
                            </div>
                            <main class="other-cases-card__main">
                            <h5 class="other-cases-card__title">
                                <?php echo $post->post_title; ?>
                            </h5>
                            <p class="other-cases-card__decr">
                                <?php echo $post->post_excerpt; ?>
                            </p>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="other-cases-card__btn">
                                View Case Study
                                <img src="<?php echo WP_IMG; ?>/icons/arrow-right-dark.svg" width="18" alt="" />
                            </a>
                            </main>
                        </div>
                <?php $delay = $delay + 300; endforeach; ?>
            <?php wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>