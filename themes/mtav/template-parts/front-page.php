<?php
/**
 * Front page template file
 * php version 7.4

 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="js-hand-trigger"></div>
<div class="dummy"></div>
<div class="hand-banner js-handanimation">
    <div class="container-fluid">
        <div class="hans-img-wrapper">
            <div class="overlay">
                <div class="bg-color"></div>
                <div class="gradient"></div>
            </div>

            <div class="logo-wrapper">
                <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/morethanvote-logo.svg" alt="">
            </div>

            <div class="scroll-arrow">
                <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/scrolldown-arrow.svg" alt="">
            </div>

            <div class="dsk-block">
                <div class="hand1-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-1.png" alt="">
                </div>
                <div class="hand2-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-2.png" alt="">
                </div>
                <div class="hand3-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-3.png" alt="">
                </div>
                <div class="hand4-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-4.png" alt="">
                </div>
                <div class="hand5-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-5.png" alt="">
                </div>
                <div class="hand6-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-6.png" alt="">
                </div>
            </div>

            <div class="tablet-block">
                <div class="hand1-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-1.png" alt="">
                </div>
                <div class="hand2-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-2.png" alt="">
                </div>
                <div class="hand3-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-3.png" alt="">
                </div>
                <div class="hand4-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-4.png" alt="">
                </div>
                <div class="hand5-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-5.png" alt="">
                </div>
                <div class="hand6-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-6.png" alt="">
                </div>
            </div>

            <div class="mo-block">
                <div class="hand1-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-1.png" alt="">
                </div>
                <div class="hand2-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-2.png" alt="">
                </div>
                <div class="hand3-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-3.png" alt="">
                </div>
                <div class="hand4-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-4.png" alt="">
                </div>
                <div class="hand5-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-5.png" alt="">
                </div>
                <div class="hand6-wrapper">
                    <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<?php the_content(); ?>
