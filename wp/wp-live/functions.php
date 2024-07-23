<?php
add_theme_support('post-thumbnails');
// Constants

define('WP_IMG', get_template_directory_uri() . '/img');

define('WP_JS', get_template_directory_uri() . '/js');

define('WP_CSS', get_template_directory_uri() . '/css');

// Connectiong CSS and JS files

function setup_files()
{

    //    wp_enqueue_style('main-min-css', WP_CSS . '/main.min.css', null, null);
    wp_enqueue_style('main', WP_CSS . '/main.css', null, null);

    wp_enqueue_style('custom', WP_CSS . '/custom.css', null, null);

    wp_enqueue_style('swiper', WP_CSS . '/swiper-bundle.min.css', null, null);

    wp_enqueue_style('fancybox', WP_CSS . '/fancybox.css', null, null);

    wp_enqueue_style('selectric', WP_CSS . '/selectric.css', null, null);

    wp_enqueue_style('aos', WP_CSS . '/aos.css', null, null);

    wp_enqueue_style('modelj', WP_CSS . '/jquery.modal.min.css', null, null);




    wp_enqueue_script('jquery', WP_JS . '/jquery-3.6.0.min.js', null, null, true);

    wp_enqueue_script('match_height', WP_JS . '/jquery.matchHeight.js', ['jquery'], null, true);

    wp_enqueue_script('swiper', WP_JS . '/swiper-bundle.min.js', ['jquery'], null, true);

    wp_enqueue_script('selectric', WP_JS . '/jquery.selectric.min.js', ['jquery'], null, true);

    wp_enqueue_script('aos', WP_JS . '/aos.js', ['jquery'], null, true);

    wp_enqueue_script('main', WP_JS . '/main.js', ['jquery', 'swiper'], null, true);



    wp_enqueue_script('fancybox', WP_JS . '/fancybox.umd.js', ['jquery'], null, true);

    wp_enqueue_script('modeljs', WP_JS . '/jquery.modal.min.js', ['jquery'], null, true);

    wp_enqueue_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', ['jquery'], null, true);

    // Add Post Featured image
    add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'setup_files');

// Registering menus

if (!function_exists('drk_register_nav_menu')) {

    function drk_register_nav_menu()
    {

        register_nav_menus(
            array(

                'primary_menu' => __('Primary Menu', 'drk'),

                'footer_menu' => __('Footer Menu', 'drk'),

            )
        );
    }

    add_action('after_setup_theme', 'drk_register_nav_menu', 0);

}

/* Adding ACF options page */

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();

}