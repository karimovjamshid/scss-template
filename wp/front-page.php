<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<!-- All layouts -->
<?php
if (have_rows('flexible_content')) {
    while (have_rows('flexible_content')) {
        the_row();
        get_template_part('template-parts/block', get_row_layout());
    }
} else {
    the_content();
}
?>

<?php get_footer(); ?>