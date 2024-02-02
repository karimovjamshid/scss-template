    <!-- Home hero -->
    <section class="home-hero">
      <div class="container">
        <div class="home-hero__wrapper">
          <div class="home-hero-left">
            <h2 class="home-hero-left__h2"><?php echo get_sub_field('home_hero_title'); ?></h2>
            <p class="home-hero-left__text">
              <?php echo get_sub_field('home_hero_text'); ?>
            </p>
            <a href="<?php echo get_sub_field('home_hero_btn_link')['url']; ?>" class="home-hero-left__btn btn"><?php echo get_sub_field('home_hero_btn_text'); ?></a>
            <img
              src="<?php echo WP_IMG; ?>/home/leaf-top.svg"
              alt="leaf"
              class="img home-hero-left__leaf"
            />
          </div>
          <div class="home-hero-right">
             <?php 
                while(have_rows('home_hero_cards')):
                the_row();
                $card_image = get_sub_field('home_card_img');
                $card_text = get_sub_field('home_card_text');
                $card_link = get_sub_field('home_card_link');
            ?>
                <a href="<?php echo $card_link['url']; ?>" class="home-hero-right__card">
                    <div class="home-hero-right__img">
                        <img src="<?php echo $card_image['url']; ?>" alt="" class="img" />
                    </div>
                    <footer class="home-hero-right__footer">
                        <div class="home-hero-right__title">
                            <?php echo $card_text; ?>
                        </div>
                        <div class="home-hero-right__arrow">
                            <img
                                src="<?php echo WP_IMG; ?>/icons/arrow-right-success.svg"
                                alt=""
                                class=""
                                width="20"
                            />
                        </div>
                    </footer>
                </a>
            <?php endwhile; ?>
            <img
              src="<?php echo WP_IMG; ?>/home/leaf-top-right.svg"
              alt="leaf"
              class="img home-hero-right__leaf"
            />
          </div>
        </div>
        <a href="#" class="home-hero__scroll" data-scroll="#briefInfo">
          scroll
          <img src="<?php echo WP_IMG; ?>/icons/arrow-right-success.svg" alt="" />
        </a>
      </div>
    </section>