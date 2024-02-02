<!-- Project outcome -->
    <section class="project-outcome">
      <div class="container">
        <div class="project-outcome__wrapper">
          <div class="project-outcome__left">
            <div class="project-outcome__img">
              <img src="<?php echo get_field('projects_outcome_img1', get_the_ID())['url']; ?>" alt="" class="img" />
            </div>
            <div class="project-outcome__img">
              <img src="<?php echo get_field('projects_outcome_img2', get_the_ID())['url']; ?>" alt="" class="img" />
            </div>
          </div>
          <div class="project-outcome__right">
            <?php 
                while(have_rows('projects_outcome_items', get_the_ID())):
                the_row();
                $item_title = get_sub_field('projects_outcome_title', get_the_ID());
                $item_text = get_sub_field('projects_outcome_text', get_the_ID());
            ?>
                <div class="project-outcome__item">
                <h4 class="project-outcome__h4 heading-with-bg"><?php echo $item_title; ?></h4>
                <div class="project-outcome__text">
                    <?php echo $item_text; ?>
                </div>
                </div>
            <?php endwhile; ?> 
          </div>
        </div>
      </div>
    </section>