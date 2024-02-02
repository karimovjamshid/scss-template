<!-- Two images and text -->
    <section class="two-img-text">
      <div class="container">
        <div class="two-img-text__wrapper">
          <div class="two-img-text__left">
            <div class="two-img-text__item">
              <img src="<?php echo get_sub_field('two_imgs_and_text_img_1')['url']; ?>" alt="" class="img" />
            </div>
            <div class="two-img-text__item">
              <img src="<?php echo get_sub_field('two_imgs_and_text_img_2')['url']; ?>" alt="" class="img" />
            </div>
          </div>
          <div class="two-img-text__right">
            <?php if(get_sub_field('two_imgs_and_text_title')): ?>
              <h4 class="two-img-text__h4 heading-with-bg"><?php echo get_sub_field('two_imgs_and_text_title'); ?></h4>
            <?php endif;?>
            <?php echo get_sub_field('two_imgs_and_text_text'); ?>
          </div>
        </div>
      </div>
    </section>
    