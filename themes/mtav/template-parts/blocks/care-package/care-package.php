<?php
/**
 * Dropbox Care Package block template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<section
    class="dropbox-pkg"
    style="background-image: url(<?php echo STYLESHEETURI ?>/assets/images/png/bg-package.png)">
    <h2>
        <?php echo esc_attr($title)?>
    </h2>
    <p>
        <?php echo esc_attr($subtext)?>
    </p>
    <?php if (! empty($button_text)) { ?>
        <a href="<?php echo esc_attr($button_link)?>"
            class="btn blue no-border"
            target="_blank">
            <?php echo esc_attr($button_text)?>
        </a>
    <?php } ?>
</section>
