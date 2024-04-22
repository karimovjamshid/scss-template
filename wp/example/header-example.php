<!DOCTYPE html>

<html <?php get_language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
        <?php wp_title('|', true, 'right');
        bloginfo('sitename'); ?>
    </title>

    <?php wp_head(); ?>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo WP_IMG; ?>/favicons/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo WP_IMG; ?>/favicons/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo WP_IMG; ?>/favicons/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo WP_IMG; ?>/favicons/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo WP_IMG; ?>/favicons/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo WP_IMG; ?>/favicons/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo WP_IMG; ?>/favicons/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo WP_IMG; ?>/favicons/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo WP_IMG; ?>/favicons/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo WP_IMG; ?>/favicons/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo WP_IMG; ?>/favicons/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo WP_IMG; ?>/favicons/favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo WP_IMG; ?>/favicons/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">

</head>

<body <?php body_class(); ?>>

    <!-- Header -->
    <header class="header">
        <div class="container-huge">
            <div class="header__wrapper">
                <a href="<?php echo esc_url(home_url('/')) ?>" class="logo">
                    <img src="<?php echo get_field('logo', 'options')['url']; ?>" alt="" class="img" />
                </a>
                <?php
                $menu = wp_nav_menu([
                    'theme_location' => 'primary_menu',
                    'menu_class' => 'main-menu',
                    'container' => false,
                    'echo' => true
                ]);
                ?>
                <div class="burger">
                    <img src="<?php echo WP_IMG; ?>/icons/bars.png" alt="" />
                </div>
            </div>
        </div>
    </header>


    <!-- Seach field example -->
    <form role="search" class="search_panel" method="get" action="<?php echo home_url('/') ?>">
        <img class="search__icon" src="<?php echo WP_IMG; ?>/icons/search.png" width="22" alt="" />
        <input type="text" name="s" placeholder="Search" class="search__input" />
    </form>