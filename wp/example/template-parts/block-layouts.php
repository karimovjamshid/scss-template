<?php

// Check value exists.
if( have_rows('flexible_template') ):
    // Loop through rows.
    while ( have_rows('flexible_template') ) : the_row();

        switch (get_row_layout()):
            case 'coloured_banner_block':
                get_template_part('template-parts/block', 'coloured-banner');
                break;
            case 'home_hero_block':
                get_template_part('template-parts/block', 'home-hero');
                break;
            case 'brief_info_block':
                get_template_part('template-parts/block', 'brief-info');
                break;
            case 'case_studies_slider_block':
                get_template_part('template-parts/block', 'case-study-slider');
                break;
            case 'testimonials_slider_block':
                get_template_part('template-parts/block', 'testimonials');
                break;
            case 'gallery_slider_block':
                get_template_part('template-parts/block', 'gallery-slider');
                break;
            case 'main_hero_block':
                get_template_part('template-parts/block', 'main-hero');
                break;
            case 'two_imgs_and_text_block':
                get_template_part('template-parts/block', 'two-img-and-text');
                break;
            case 'faqs_block':
                get_template_part('template-parts/block', 'faqs');
                break;
            case 'services_posts_block':
                get_template_part('template-parts/block', 'services-cards');
                break;
            case 'tag_and_text_block':
                get_template_part('template-parts/block', 'tag-and-text');
                break;
            case 'services_hero_block':
                get_template_part('template-parts/block', 'services-hero');
                break;
            case 'list_box_block':
                get_template_part('template-parts/block', 'list-box');
                break;
            case 'case_studies_posts_block':
                get_template_part('template-parts/block', 'case-cards');
                break;
            case 'featured_case_studies':
                get_template_part('template-parts/block', 'featured-cases');
                break;
            case 'case_studies_hero_block':
                get_template_part('template-parts/block', 'case-studies-hero');
                break;
            case 'single_case-study_outcome_block':
                get_template_part('template-parts/block', 'projects-outcome');
                break;
            case 'case_study_single_hero_block':
                get_template_part('template-parts/block', 'case-hero');
                break;
            case 'contact_hero_block':
                get_template_part('template-parts/block', 'contact-hero');
                break;
            case 'enquiry_form_block':
                get_template_part('template-parts/block', 'form');
                break;

            
            default:
                break;
            endswitch;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;