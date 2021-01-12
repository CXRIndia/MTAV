<?php
/**
 * Dropbox Sweeptakes block template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<section class="sweeptakes">
    <div class="lhs">
        <img class="lazyload"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg"
            alt="right-arrow">
        <h4>
            <?php echo esc_attr($title)?>
        </h4>
        <p>
            <?php echo esc_attr($subtext)?>
        </p>

        <?php if (! empty($link_text)) { ?>
            <a href="javascript:void(0)" id="enterPopup" class="link">
                <?php echo esc_attr($link_text)?>
            </a>
        <?php } ?>
    </div>

    <div class="rhs">
        <div class="thumbnail">
            <img class="lazyload"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-src="<?php echo esc_url($block_image_url) ?>"
            alt="<?php echo esc_attr($block_image_alt) ?>">
        </div>
    </div>
</section>
