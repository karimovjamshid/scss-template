 <!-- FAQs -->
    <section class="faqs">
      <div class="container">
        <h3 class="faqs__h3"><?php echo get_sub_field('faqs_title'); ?></h3>
        <p class="faqs__text">
          <?php echo get_sub_field('faqs_subtitle'); ?>
        </p>
        <main class="faqs__main">
            <?php 
                while(have_rows('faqs_items')):
                the_row();
                $faqs_question = get_sub_field('faqs_question');
                $faqs_answer = get_sub_field('faqs_answer');
            ?>
                <div class="faqs-item">
                    <header class="faqs-item__header">
                        <div class="faqs-item__question"><?php echo $faqs_question; ?></div>
                        <div class="faqs-item__icon">
                            <div class="faqs-item__line"></div>
                            <div class="faqs-item__line2"></div>
                        </div>
                    </header>
                    <div class="faqs-item__answer">
                        <?php echo $faqs_answer; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </main>
      </div>
    </section>