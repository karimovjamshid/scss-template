<!-- Grid gallery -->
    <section class="gallery-grid">
      <div class="container">
        <h3 class="gallery-grid__h3"><?php echo get_sub_field('gallery_title'); ?></h3>
        <div class="gallery-grid-slider swiper">
          <div class="swiper-wrapper">
            <?php 
                $gallery_number = 1;
                while(have_rows('gallery_carousel')):
                the_row();
                $slide_thumbnail = get_sub_field('gallery_thumbnail');
                $slide_video = get_sub_field('gallery_video_file');
            ?>
                <div class="gallery-grid-slide swiper-slide">
                    <div class="gallery-grid-slide__left">
                        <a
                            href="<?php echo $slide_video['url']; ?>"
                            class="gallery-grid-slide__video"
                            data-fancybox="video-gallery<?php echo $gallery_number; ?>"
                        >
                        <img
                            src="<?php echo $slide_thumbnail['url']; ?>"
                            alt=""
                            class="img gallery-grid-slide__img"
                        />
                        <img
                            src="<?php echo WP_IMG; ?>/icons/play-icon.svg"
                            class="gallery-grid-slide__play"
                            width="80px"
                            alt=""
                        />
                        </a>
                    </div>
                    <div class="gallery-grid-slide__right">
                        <?php 
                            while(have_rows('gallery_right_images')):
                            the_row();
                            $right_img = get_sub_field('gallery_right_img');
                        ?>
                            <a
                                href="<?php echo $right_img['url']; ?>"
                                data-fancybox="gallery-grid<?php echo $gallery_number; ?>"
                                class="gallery-grid-slide__item"
                            >
                                <img src="<?php echo $right_img['url']; ?>" alt="" class="img" />
                            </a>
                        <?php endwhile; ?> 
                    </div>
                </div>
            <?php $gallery_number = $gallery_number + 1; endwhile; ?> 
          </div>
          <div class="gallery-grid-pag swiper-pagination"></div>
        </div>
      </div>
    </section>