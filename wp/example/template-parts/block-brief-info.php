<!-- About us, Our services -->
    <section id="briefInfo" class="brief-info">
      <div class="container">
        <div class="brief-info-top">
            <div class="brief-info-top__video">
                <?php 
                    $finalURL;
                    $videoFile = get_sub_field('brief_top_file')['url'];
                    $videoLink = get_sub_field('brief_top_video_link');
                    if(get_sub_field('brief_top_question') == 'file'){
                        $finalURL = $videoFile;
                    }elseif(get_sub_field('brief_top_question') == 'link'){
                        $finalURL = $videoLink;
                    }
                ?>
                <a href="<?php echo $finalURL; ?>" data-fancybox="briefinfo1" class="brief-info-top__thumb">
                    <img src="<?php echo get_sub_field('brief_top_thumbnail')['url']; ?>" class="img" alt="" />
                    <div class="brief-info-top__play">
                        <img src="<?php echo WP_IMG; ?>/icons/play-icon.svg" width="80px" alt="" />
                    </div>
                </a>
            </div>
          <div class="brief-info-top__left">
            <div class="tag-title-card">
              <header class="tag-title-card__header">
                <div class="tag-title-card__heading">
                  <h3 class="tag-title-card__h3"><?php echo get_sub_field('brief_top_tag'); ?></h3>
                </div>
              </header>
              <h4 class="tag-title-card__h4"><?php echo get_sub_field('brief_top_title'); ?></h4>
              <p class="tag-title-card__text">
                <?php echo get_sub_field('brief_top_text'); ?>
              </p>
              <a href="<?php echo get_sub_field('brief_top_btn_link'); ?>" class="tag-title-card__btn btn btn--purple">
                Learn more
              </a>
            </div>
          </div>
        </div>
        <div class="brief-info-bottom">
          <div class="brief-info-bottom__left">
                <div class="tag-title-card">
                    <header class="tag-title-card__header">
                        <div class="tag-title-card__heading">
                        <h3 class="tag-title-card__h3"><?php echo get_sub_field('brief_bottom_tag'); ?></h3>
                        </div>
                    </header>
                    <h4 class="tag-title-card__h4"><?php echo get_sub_field('brief_bottom_title'); ?></h4>
                    <p class="tag-title-card__text">
                        <?php echo get_sub_field('brief_bottom_text'); ?>
                    </p>
                    <a href="<?php echo get_sub_field('brief_bottom_btn_link'); ?>" class="tag-title-card__btn btn btn--purple">
                        Learn more
                    </a>
                </div>
          </div>
          <div class="brief-info-bottom__right">
            <div class="brief-info-bottom__card">
              <div class="brief-info-bottom__img">
                <img src="<?php echo get_sub_field('brief_bottom_img')['url']; ?>" alt="" class="img" />
              </div>
            </div>
            <div class="brief-info-bottom__card">
              <a
                href="<?php echo get_sub_field('brief_bottom_video_link'); ?>"
                data-fancybox="briefinfo2"
                class="brief-info-bottom__img"
              >
                <img src="<?php echo get_sub_field('brief_bottom_thumbnail')['url']; ?>" alt="" class="img" />
                <img
                  src="<?php echo WP_IMG; ?>/icons/play-icon.svg"
                  width="80px"
                  alt=""
                  class="brief-info-bottom__play"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>