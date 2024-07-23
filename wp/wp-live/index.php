<?php get_header();

if (have_rows('flexible_content')) {
    while (have_rows('flexible_content')) {
        the_row();
        get_template_part('template-parts/block', get_row_layout());
    }
} else {
    the_content();
}

get_footer();

?>