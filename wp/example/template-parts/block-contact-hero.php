<!-- Contact hero -->
    <section class="contact-hero">
      <div class="container">
        <div class="contact-hero__wrapper">
          <div class="contact-hero__left">
            <div class="tag-title-card">
              <header class="tag-title-card__header">
                <div class="tag-title-card__heading">
                  <h3 class="tag-title-card__h3">CONTACT US</h3>
                </div>
              </header>
              <h4 class="tag-title-card__h4"><?php echo get_sub_field('contact_hero_title'); ?></h4>
              <p class="tag-title-card__text">
                <?php echo get_sub_field('contact_hero_text'); ?>
              </p>
            </div>
          </div>
          <div class="contact-hero__right">
            <div class="contact-hero-card">
              <div class="contact-hero-card__icon">
                <img src="<?php echo get_sub_field('contact_hero_phone_icon')['url']; ?>" alt="" />
              </div>
              <div class="contact-hero-card__info">
                <h5 class="contact-hero-card__h5">Ring us on:</h5>
                <a href="tel:+<?php echo get_sub_field('contact_hero_phone'); ?>" class="contact-hero-card__input"
                  ><?php echo get_sub_field('contact_hero_phone'); ?></a
                >
              </div>
            </div>
            <div class="contact-hero-card">
              <div class="contact-hero-card__icon">
                <img src="<?php echo get_sub_field('contact_hero_email_icon')['url']; ?>" alt="" />
              </div>
              <div class="contact-hero-card__info">
                <h5 class="contact-hero-card__h5">Alternatively:</h5>
                <a href="mailto:<?php echo get_sub_field('contact_hero_email'); ?>" class="contact-hero-card__input"
                  >Drop us an email</a
                >
              </div>
            </div>
          </div>
          <img
            src="<?php echo WP_IMG; ?>/home/leaf-top.svg"
            alt=""
            class="contact-hero__dec1"
          />
          <img
            src="<?php echo WP_IMG; ?>/home/leaf-top-right.svg"
            alt=""
            class="contact-hero__dec2"
          />
        </div>
      </div>
    </section>