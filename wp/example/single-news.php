<?php
/*
Template Name: Single news
*/
get_header();

if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <!-- Single news -->
        <div class="breadcrumb__wrapper">
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumb__item">Home</a>
                <div class="breadcrumb__item">
                    <?php echo get_the_date('Y'); ?>
                </div>
                <div class="breadcrumb__item">
                    <?php echo get_the_date('j'); ?>
                </div>
                <div class="breadcrumb__item">
                    <?php echo get_the_date('F'); ?>
                </div>
                <div class="breadcrumb__item">
                    <?php echo the_title(); ?>
                </div>
            </div>
        </div>

        <div class="blue-wrapper bottom top">
            <div class="single-news-section">
                <div class="single-news__wrapper">
                    <main class="news-main">
                        <h6 class="news-aside__h6">Article</h6>
                        <div class="news-main__content">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <?php the_content(); ?>
                        </div>
                        <!-- Comments -->
                        <?php comments_template(''); ?>
                    </main>
                    <aside class="news-aside">
                        <h6 class="news-aside__h6">Recent posts</h6>
                        <?php
                        $calf_notes = get_posts([
                            'post_type' => 'calf-notes',
                            'posts_per_page' => -1,
                        ]);
                        $duration = 200;
                        if (!empty($calf_notes)):
                            foreach ($calf_notes as $calf_note):
                                ?>
                                <div class="news-aside__recent">
                                    <div class="news-aside__heading">
                                        <span>Calf Note #
                                            <?php echo get_field('calf_note_number', $calf_note->ID); ?>
                                        </span> –
                                        <a href="<?php echo get_permalink($calf_note->ID); ?>">
                                            <?php echo $calf_note->post_title; ?>
                                        </a>
                                    </div>
                                    <div class="news-aside__date">
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </div>
                                </div>
                                <?php $duration = $duration + 300; endforeach; endif; ?>
                    </aside>
                </div>
            </div>
        </div>

    <?php endwhile;
    wp_reset_postdata();
endif;
get_footer(); ?>