<!-- Case studies hero -->
    <section class="case-studies-hero">
      <div class="container">
        <h2 class="case-studies-hero__h2"><?php echo get_sub_field('case_studies_hero_title'); ?></h2>
        <div class="case-studies-hero__wrapper">
             <?php
                $cases = get_posts([
                    'post_type'=>'case_studies',
                    'posts_per_page'=> 1,
                ]);
                if ( ! empty($cases) ) : 
                foreach ($cases as $case) :
            ?>
                <div class="case-studies-hero__box">
                    <div class="case-studies-hero__left">
                        <div class="case-studies-hero__img">
                            <img src="<?php echo get_the_post_thumbnail_url($case->ID, 'full'); ?>" alt="" class="img" />
                        </div>
                    </div>
                    <div class="case-studies-hero__right">
                        <h4 class="case-studies-hero__h4">
                            <span>&nbsp;&nbsp;&nbsp; <?php echo $case->post_title; ?> &nbsp;&nbsp;&nbsp;</span>
                        </h4>
                        <p class="case-studies-hero__text">
                            <?php echo $case->post_excerpt; ?>
                        </p>
                        <a href="<?php echo get_permalink($case->ID); ?>" class="case-studies-hero__btn btn">Read more</a>
                    </div>
                </div>
            <?php endforeach; endif; ?> 
          <img
            src="<?php echo WP_IMG; ?>/home/dec-dark.svg"
            alt=""
            class="case-studies-hero__dec1"
          />
          <img
            src="<?php echo WP_IMG; ?>/home/dec-dark2.svg"
            alt=""
            class="case-studies-hero__dec2"
          />
        </div>
      </div>
    </section>