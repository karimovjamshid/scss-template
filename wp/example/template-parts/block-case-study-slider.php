<!-- Our case studies -->
    <section class="case-study">
      <div class="container">
        <div class="case-study__wrapper">
          <h3 class="case-study__h3"><?php echo get_sub_field('case_studies_slider_title'); ?></h3>
          <div class="case-study-slider swiper">
            <div class="swiper-wrapper">
                <?php 
                    while(have_rows('case_studies_carousel')):
                    the_row();
                    $slide_image = get_sub_field('case_slider_image');
                    $slide_title = get_sub_field('case_slider_title');
                    $slide_text = get_sub_field('case_slider_text');
                    $slide_link = get_sub_field('case_slider_btn_link');
                ?>
                    <div class="case-study-slide swiper-slide">
                        <div class="case-study-slide__wrapper">
                            <div class="case-study-slide__left">
                                <img src="<?php echo $slide_image['url']; ?>" alt="" class="img" />
                            </div>
                            <div class="case-study-slide__right">
                                <main class="case-study-slide__main">
                                    <h5 class="case-study-slide__title">
                                        <span>&nbsp;&nbsp;<?php echo $slide_title; ?>&nbsp;&nbsp;</span>
                                    </h5>
                                    <p class="case-study-slide__text">
                                        <?php echo $slide_text; ?>
                                    </p>
                                    <a href="<?php echo $slide_link; ?>" class="case-study-slide__btn btn">Read more</a>
                                </main>
                            </div>
                        </div>
                    </div>
               <?php endwhile; ?>         
            </div>
            <div class="swiper-pagination case-study-pag"></div>
          </div>
          <div class="case-study-slider__dec1">
            <img src="<?php echo WP_IMG; ?>/home/dec-dark.svg" alt="" />
          </div>
          <div class="case-study-slider__dec2">
            <img src="<?php echo WP_IMG; ?>/home/dec-dark2.svg" alt="" />
          </div>
        </div>
      </div>
    </section>