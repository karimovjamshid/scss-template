<?php get_header(); ?>

<!-- All layouts -->
<?php get_template_part('template-parts/block', 'layouts'); ?>

<section class="error-page">
    <div class="container">
        <h1 class="error-page__h1">404</h1>
        <h3 class="error-page__h3">page not found</h3>
        <p class="error-page__text">
            This page doesn't exist or has been removed.
        </p>
        <a class="error-page__btn btn" href="<?php echo esc_url(home_url('/')) ?>">Go Back Home</a>
    </div>
</section>
<?php get_footer(); ?>
