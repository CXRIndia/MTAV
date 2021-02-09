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


        </div>
    </div>
</div>


<?php the_content(); ?>
