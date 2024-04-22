<?php get_header(); ?>

<?php $term = get_queried_object(); ?>
<!-- Title and text -->
<section class="title-text">
    <div class="container">
        <h3 class="title-text__h3">Our Surroundings</h3>
        <div class="title-text__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
        </div>
    </div>
</section>

<!-- Surroundings -->
<section class="surroundings">
    <div class="container">
        <div class="surroundings__wrapper">
            <?php
            $surroundings = get_posts([
                'post_type' => 'our_surroundings',
                'posts_per_page' => -1,
            ]);
            $duration = 200;
            if (!empty($surroundings)):
                foreach ($surroundings as $surrounding):
                    ?>
                    <div class="surroundings-card">
                        <img src="<?php echo get_the_post_thumbnail_url($surrounding->ID, 'full'); ?>" alt=""
                            class="surroundings-card__img img" />
                        <div class="surroundings-card__content">
                            <h4 class="surroundings-card__h4">
                                <?php echo $surrounding->post_title; ?>
                            </h4>
                            <h5 class="surroundings-card__h5">
                                <?php echo get_field('time', $surrounding->ID); ?>
                            </h5>
                            <div class="surroundings-card__text">
                                <?php echo $surrounding->post_excerpt; ?>
                            </div>
                        </div>
                        <div class="surroundings-card__btn">Explore</div>
                        <div class="surroundings-modal">
                            <div class="surroundings-modal__window">
                                <div class="container">
                                    <div class="surroundings-modal__wrapper">
                                        <div class="surroundings-modal__left">
                                            <div class="surroundings-modal__close">
                                                <img src="<?php echo WP_IMG; ?>/icons/cross-circled.svg" width="32px" alt=""
                                                    class="surroundings-modal__cross" />
                                            </div>
                                            <img src="<?php echo get_field('modal_window_image', $surrounding->ID); ?>" alt=""
                                                class="img surroundings-modal__img" />
                                        </div>
                                        <div class="surroundings-modal__right">
                                            <div class="surroundings-modal__content">
                                                <h4 class="surroundings-modal__h4">
                                                    <?php echo $surrounding->post_title; ?>
                                                </h4>
                                                <h5 class="surroundings-modal__h5">
                                                    <?php echo get_field('time', $surrounding->ID); ?>
                                                </h5>
                                                <div class="surroundings-modal__text">
                                                    <?php echo get_field('modal_window_text', $surrounding->ID); ?>
                                                </div>
                                                <a href="<?php echo get_permalink($surrounding->ID); ?>"
                                                    class="btn surroundings-modal__btn">
                                                    Visit
                                                    <img src="<?php echo WP_IMG; ?>/icons/arrow-right-dark.svg" width="12px"
                                                        alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $duration = $duration + 300; endforeach; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>