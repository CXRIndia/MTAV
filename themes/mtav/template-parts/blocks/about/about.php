<?php
/**
 * Dropbox About block template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>
<section id="about" class="about">
    <div class="lhs">

        <?php if (!empty($about_section['title'])) {?>
            <div class="lhs__part">
                <img class="lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg"
                    alt="right-arrow">
                <h1>
                    <?php echo esc_attr($about_section['title']) ?>
                </h1>
                <p>
                    <?php echo esc_attr($about_section['subtext']) ?>
                </p>
            </div>
        <?php } ?>

        <?php if (!empty($lunchbox_section['title'])) {?>
            <div class="lhs__part">
                <img class="lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg"
                    alt="right-arrow">
                <h1>
                    <?php echo esc_attr($lunchbox_section['title']) ?>
                </h1>
                <p>
                    <?php echo esc_attr($lunchbox_section['subtext']) ?>
                </p>
            </div>
        <?php } ?>

    </div>

    <div class="rhs"></div>
    <picture>
        <source media="(max-width:767px)"
            srcset="<?php echo esc_url($block_image_mobile_url) ?>">
        <img class="lazyload"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo esc_url($block_image_desktop_url) ?>"
            alt="<?php esc_attr($block_image_desktop_alt)?>">
    </picture>
</section>
