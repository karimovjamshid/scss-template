<!-- Designed... -->
    <section class="designed">
      <div class="container">
        <h3 class="designed__h3">
          <?php echo get_sub_field('list_box_title'); ?>
        </h3>
        <div class="designed__wrapper">
          <div class="designed-card">
            <main class="designed-card__main">
              <h5 class="designed-card__title"><?php echo get_sub_field('left_list_title'); ?></h5>
              <ul class="designed-card__list">
                <?php 
                    while(have_rows('left_list_box_list')):
                    the_row();
                    $left_list_item = get_sub_field('left_list_box_list_item');
                ?>
                    <li class="designed-card__item"><?php echo $left_list_item; ?></li>
                <?php endwhile; ?> 
              </ul>
            </main>
          </div>
          <div class="designed-card">
            <main class="designed-card__main">
              <h5 class="designed-card__title"><?php echo get_sub_field('right_list_title'); ?></h5>
              <ul class="designed-card__list">
                <?php 
                    while(have_rows('right_list_box_list')):
                    the_row();
                    $right_list_item = get_sub_field('right_list_box_item');
                ?>
                    <li class="designed-card__item"><?php echo $right_list_item; ?></li>
                <?php endwhile; ?> 
              </ul>
            </main>
          </div>
        </div>
      </div>
    </section>