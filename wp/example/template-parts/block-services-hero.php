 <!-- Service hero -->
    <section class="service-hero">
      <div class="container">
        <div class="service-hero__wrapper">
          <div class="service-hero__tag"><?php echo get_sub_field('services_hero_title'); ?></div>
          <h1 class="service-hero__h1"><?php the_title(); ?></h1>
            <?php the_excerpt(); ?>
          <img
            src="<?php echo WP_IMG; ?>/home/leaf-top-right.svg"
            class="service-hero__dec1"
            alt=""
          />
          <img
            src="<?php echo WP_IMG; ?>/home/leaf-top.svg"
            class="service-hero__dec2"
            alt=""
          />
        </div>
      </div>
    </section>