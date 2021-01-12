<?php
/**
 * Dropbox Banner block template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<section class="hero"
    style="background-image: url(<?php echo esc_url($background_image_url) ?>)">
    <div class="overlay">
        <div class="hero__data">
            <img class="lazyload" data-src="<?php echo esc_url($block_image_url);?>"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                alt="<?php echo esc_attr($block_image_alt)?>"/>
            <div class="hero__data-description">
                <p><?php echo wp_kses_post($content_text) ?></p>
            </div>
        </div>
        <a href="#about" class="icon-down-arrow">
            <img class="lazyload"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-down.svg"
                alt="down-arrow">
        </a>
    </div>
</section>
