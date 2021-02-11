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

$width = "<script>document.write(screen.width);</script>";
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
                <img class="lazyload logo-wrapper--anim"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/morethanvote-logo.svg"
                    alt="logo">
            </div>

            <div class="scroll-arrow">
                <img class="lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/scrolldown-arrow.svg" alt="hand">
            </div>

            <?php if($width > 1200) : ?>
            <div class="dsk-block">
                <div class="hand1-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-1.png" alt="hand">
                </div>
                <div class="hand2-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-2.png" alt="hand">
                </div>
                <div class="hand3-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-3.png" alt="hand">
                </div>
                <div class="hand4-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-4.png" alt="hand">
                </div>
                <div class="hand5-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-5.png" alt="hand">
                </div>
                <div class="hand6-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/hand-6.png" alt="hand">
                </div>
            </div>
            <?php endif; ?>

            <?php if(($width >= 768) && ($width <= 1159) ) : ?>
            <div class="tablet-block">
                <div class="hand1-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-1.png" alt="hand">
                </div>
                <div class="hand2-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-2.png" alt="hand">
                </div>
                <div class="hand3-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-3.png" alt="hand">
                </div>
                <div class="hand4-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-4.png" alt="hand">
                </div>
                <div class="hand5-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-5.png" alt="hand">
                </div>
                <div class="hand6-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/tablet/tablet-hand-6.png" alt="hand">
                </div>
            </div>
            <?php endif; ?>

            <?php if($width <= 767) : ?>
            <div class="mo-block">
                <div class="hand1-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-1.png" alt="hand">
                </div>
                <div class="hand2-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-2.png" alt="hand">
                </div>
                <div class="hand3-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-3.png" alt="hand">
                </div>
                <div class="hand4-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-4.png" alt="hand">
                </div>
                <div class="hand5-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-5.png" alt="hand">
                </div>
                <div class="hand6-wrapper">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/hands/mobile/mobile-hand-6.png" alt="hand">
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php the_content(); ?>
