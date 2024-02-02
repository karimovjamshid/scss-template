    <!-- Other case studies -->
    <section class="other-cases">
      <div class="container">
        <h3 class="other-cases__h3"><?php echo get_sub_field('case_studies_posts_title'); ?></h3>
        <div class="other-cases__wrapper">
            <?php
                $cases = get_posts([
                    'post_type'=>'case_studies',
                    'posts_per_page'=> -1,
                ]);
                $duration = 200;
                if ( ! empty($cases) ) : 
                foreach ($cases as $case) :
            ?>
                <div class="other-cases-card">
                    <div class="other-cases-card__img">
                        <?php if(get_the_post_thumbnail_url($case->ID, 'full')): ?>
                            <img src="<?php echo get_the_post_thumbnail_url($case->ID, 'full'); ?>" alt="" class="img" />
                        <?php endif; ?>
                    </div>
                    <main class="other-cases-card__main">
                    <h5 class="other-cases-card__title">
                        <?php echo $case->post_title; ?>
                    </h5>
                    <p class="other-cases-card__decr">
                         <?php echo $case->post_excerpt; ?>
                    </p>
                    <a href="<?php echo get_permalink($case->ID); ?>" class="other-cases-card__btn">
                        View Case Study
                        <img src="<?php echo WP_IMG; ?>/icons/arrow-right-dark.svg" width="18" alt="" />
                    </a>
                    </main>
                </div>
            <?php $duration = $duration + 300; endforeach; endif; ?> 
        </div>
      </div>
    </section>