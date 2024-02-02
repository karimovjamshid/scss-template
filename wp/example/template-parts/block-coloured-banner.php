<?php
    $extraClass;
    if(get_sub_field('coloured_banner_decoration') == 'light'){
        $extraClass = 'light';
    }else{
        $extraClass = 'dark';
    }

?>

<div class="footer-top <?php echo $extraClass; ?>" style="background-color: <?php echo get_sub_field('coloured_banner_bg'); ?>">
    <div class="container">
        <?php if($extraClass == 'dark'): ?>
            <img
                src="<?php echo WP_IMG; ?>/general/footer-dec.svg"
                class="footer-top__dec"
                alt=""
            />
        <?php else: ?>
            <img
                src="<?php echo WP_IMG; ?>/about/dec-white.svg"
                class="footer-top__dec"
                alt=""
            />

        <?php endif;?>
        <div class="footer-top__wrapper">
            <h3 class="footer-top__h3">
                <?php echo get_sub_field('coloured_banner_title'); ?>
            </h3>
            <a href="<?php echo get_sub_field('coloured_banner_btn_link')['url']; ?>" 
                class="footer-top__btn btn" 
                style="color: <?php echo get_sub_field('coloured_banner_btn_color'); ?>; background-color:<?php echo get_sub_field('coloured_banner_btn_bg'); ?>">
                <?php echo get_sub_field('coloured_banner_btn_text'); ?>
            </a>
        </div>
    </div>
</div>

<style>
    .footer-top__h3 span{
        color: <?php echo get_sub_field('coloured_banner__underlined'); ?>;
    }
</style>