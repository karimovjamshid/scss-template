<!-- Main hero -->
<?php
    $extraClass;
    if(get_sub_field('main_hero_text_color') == 'light'){
        $extraClass = 'light';
    }else{
        $extraClass = 'dark';
    }

?>
    <section class="<?php echo $extraClass; ?> main-hero" style="background-color: <?php echo get_sub_field('main_hero_bg'); ?>">
      <div class="main-hero__wrapper">
        <div class="main-hero__left">
          <div class="tag-title-card">
            <header class="tag-title-card__header">
              <div class="tag-title-card__heading">
                <h3 class="tag-title-card__h3"><?php echo get_sub_field('main_hero_tag'); ?></h3>
              </div>
            </header>
            <h4 class="tag-title-card__h4"><?php echo get_sub_field('main_hero_title'); ?></h4>
            <p class="tag-title-card__text">
              <?php echo get_sub_field('main_hero_text'); ?>
            </p>
          </div>
        </div>
        <div class="main-hero__right">
          <div class="main-hero__img">
            <img src="<?php echo get_sub_field('main_hero_img')['url']; ?>" alt="" class="img main-hero__thumb" />
          </div>
        </div>
      </div>
    </section>