<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top__wrapper">
                <div class="footer-top__row">
                    <h3 class="footer-top__h3">Company</h3>
                    <p class="footer-top__text text">
                        <?php echo get_field('footer_description', 'options'); ?>
                    </p>
                    <a href="<?php echo get_field('sra_link', 'options'); ?>" target="_blank" class="footer-top__auth">
                        <img src="<?php echo WP_IMG; ?>/auth.png" alt="" class="img" />
                    </a>
                    <div class="footer-top__info">
                        <div class="footer-top__infoitem">
                            Company Number: <span><?php echo get_field('company_number', 'options'); ?></span>
                        </div>
                        <div class="footer-top__infoitem">
                            VAT number: <span><?php echo get_field('company_vat_number', 'options'); ?></span>
                        </div>
                        <div class="footer-top__infoitem">
                            SRA Number: <span><?php echo get_field('company_sra_number', 'options'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="footer-top__row">
                    <h3 class="footer-top__h3">Policies</h3>
                    <div class="footer-top__policies">
                        AII Policies are available from
                        <a href="mailto:<?php echo get_field('policies_are_aviable', 'options'); ?>">Geoff Birtles</a>
                    </div>
                    <?php
                    $menu = wp_nav_menu([
                        "menu_class" => "footer-menu",
                        'theme_location' => 'footer_menu',
                        'container' => false,
                        'echo' => true
                    ]);
                    ?>
                </div>
                <div class="footer-top__row">
                    <div class="footer-top__content">
                        <h3 class="footer-top__h3">Contact</h3>
                        <ul class="footer-contact-menu">
                            <?php
                            while (have_rows('contact_phone_numbers', 'options')):
                                the_row();
                                $city = get_sub_field('contact_city', 'options');
                                $phone_num = get_sub_field('contact_phone_number', 'options');
                                ?>
                                <li><?php echo $city; ?>
                                    <a href="tel:+<?php echo $phone_num; ?>"><?php echo $phone_num; ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <div class="social">
                            <?php
                            while (have_rows('social_icons', 'options')):
                                the_row();
                                $social_icon = get_sub_field('social_icon', 'options');
                                $social_bg = get_sub_field('social_bg_color', 'options');
                                $social_link = get_sub_field('social_link', 'options');
                                ?>
                                <a href="<?php echo $social_link; ?>" target="_blank" class="social__item"
                                    style="background-color: <?php echo $social_bg; ?>">
                                    <img src="<?php echo $social_icon['url']; ?>" alt="" />
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>
                © <span id="yearContainer"></span>Dixon Rigby Keogh. All rights
                reserved. Website by:
                <a href="<?php echo get_field('website_by_link', 'options'); ?>">
                    <img src="<?php echo get_field('website_by_icon', 'options')['url']; ?>" alt="" />
                </a>
            </p>
        </div>
    </div>
</footer>
<!-- Removing spaces and from string -->
<a href="tel:+<?php echo str_replace(" ", "", get_field('main_phone', 'options')); ?>">
    <?php echo get_field('main_phone', 'options'); ?>
</a>
<!-- Checking body classes and show markup according to body class -->
<?php $classes = get_body_class();
if (in_array('home', $classes)): ?>
    <div class=""></div>
<?php else: ?>
    <div class="incase">
        <?php get_template_part('template-parts/block', 'book_your_stay'); ?>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>