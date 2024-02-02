  <!-- Main hero -->
    <section class="main-hero" style="background-color: <?php echo get_sub_field('case_study_single_hero_bg'); ?>">
      <div class="main-hero__wrapper">
        <div class="main-hero__left">
          <div class="tag-title-card">
            <header class="tag-title-card__header">
              <div class="tag-title-card__heading">
                <h3 class="tag-title-card__h3"><?php echo get_sub_field('case_study_single_hero_title'); ?></h3>
              </div>
            </header>
            <h4 class="tag-title-card__h4"><?php the_title(); ?></h4>
            <p class="tag-title-card__text">
              <?php the_excerpt(); ?>
            </p>
          </div>
        </div>
        <div class="main-hero__right">
          <a
            class="main-hero__img"
            href="<?php echo get_sub_field('case_study_single_hero_video')['url']; ?>"
            data-fancybox="mainherovideo1"
          >
                <img
                src="<?php echo get_sub_field('case_study_single_hero_thumbnail')['url']; ?>"
                alt=""
                class="img main-hero__thumb"
                />
                <div class="main-hero__play">
                <img src="<?php echo WP_IMG; ?>/icons/play-icon.svg" width="80px" alt="" />
                </div>
            </a>
        </div>
      </div>
    </section>