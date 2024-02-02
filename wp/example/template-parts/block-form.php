 <!-- Form -->
    <main class="enquiry">
      <div class="container">
        <h3 class="enquiry__h3"><?php echo get_sub_field('enquiry_form_title'); ?></h3>
        <?php 
          $form_with_spans = do_shortcode('[contact-form-7 id="233" title="ENQUIRY FORM" html_class="form enquiry-form"]');
          $form_without_spans = strip_tags($form_with_spans, '<form><i><div><input><textarea><h3><label>' );
        ?>
        <?php echo $form_without_spans; ?>
      </div>
    </main>