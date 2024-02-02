    <!-- Services we offer -->
    <section class="we-offer">
      <div class="container">
        <h3 class="we-offer__h3"><?php echo get_sub_field('services_title'); ?></h3>
        <div class="we-offer__wrapper">
            <?php
                $services = get_posts([
                    'post_type'=>'services',
                    'posts_per_page'=> -1,
                ]);
                $duration = 200;
                if ( ! empty($services) ) : 
                foreach ($services as $service) :
            ?>
                <div class="we-offer-card">
                    <div class="we-offer-card__img">
                        <?php if(get_the_post_thumbnail_url($service->ID, 'full')): ?>
                            <img src="<?php echo get_the_post_thumbnail_url($service->ID, 'full'); ?>" alt="" class="img" />
                        <?php endif; ?>
                    </div>
                    <main class="we-offer-card__main">
                        <h4 class="we-offer-card__title"><?php echo $service->post_title; ?></h4>
                        <p class="we-offer-card__text">
                            <?php echo $service->post_excerpt; ?>
                        </p>
                        <a href="<?php echo get_permalink($service->ID); ?>" class="we-offer-card__btn">
                            <img src="<?php echo WP_IMG; ?>/icons/arrow-right-dark.svg" alt="" />
                        </a>
                    </main>
                </div>
            <?php $duration = $duration + 300; endforeach; endif; ?> 
        </div>
      </div>
    </section>