<!-- Testimonials -->
    <section class="testimonials">
      <div class="container">
        <div class="testimonials__wrapper">
          <div class="testimonials-box">
            <div class="testimonials-box__left">
              <div class="testimonials-box__content">
                <div class="testimonials-slider swiper">
                  <div class="swiper-wrapper">
                    <?php 
                        while(have_rows('testimonials_slider')):
                        the_row();
                        $slide_photo = get_sub_field('testimonials_slider_photo');
                        $slide_quote = get_sub_field('testimonials_slider_quote');
                        $slide_name = get_sub_field('testimonials_slider_name');
                    ?>
                        <div class="testimonials-slide swiper-slide">
                        <main class="testimonials-slide__main">
                            <header class="testimonials-slide__top">
                                <div class="testimonials-slide__inverted">“</div>
                                <div class="testimonials-slide__img">
                                    <img
                                        src="<?php echo $slide_photo['url']; ?>"
                                        alt=""
                                        class="img"
                                    />
                                </div>
                            </header>
                            <p class="testimonials-slide__text">
                                <?php echo $slide_quote; ?>
                            </p>
                            <div class="testimonials-slide__name"><?php echo $slide_name; ?></div>
                        </main>
                        </div>
                    <?php endwhile; ?> 
                  </div>
                  <div class="testimonials-slider__nav">
                    <div class="swiper-button-prev testimonials-prev">
                      <img src="<?php echo WP_IMG; ?>/icons/arrow-right-dark.svg" alt="" />
                    </div>
                    <div class="swiper-button-next testimonials-next">
                      <img src="<?php echo WP_IMG; ?>/icons/arrow-right-dark.svg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonials-box__right">
              <div class="tag-title-card">
                <header class="tag-title-card__header">
                  <div class="tag-title-card__heading">
                    <h3 class="tag-title-card__h3" style="background-color: <?php echo get_sub_field('testimonials_theme_color'); ?>;"><?php echo get_sub_field('testimonials_tag'); ?></h3>
                  </div>
                </header>
                <h4 class="tag-title-card__h4"><?php echo get_sub_field('testimonials_title'); ?></h4>
                <p class="tag-title-card__text">
                    <?php echo get_sub_field('testimonials_text'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      .testimonials::after{
        background-color: <?php echo get_sub_field('testimonials_theme_color'); ?>;
      }
      .testimonials-slide__inverted{
        color: <?php echo get_sub_field('testimonials_theme_color'); ?> !important;
      }
    </style>