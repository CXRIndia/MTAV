<?php
/**
 * Footer file
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

wp_footer();

$copyright_text = get_field('copyright_text', 'option');
$social_share   = get_field('social_share', 'option');

/* Sweepstakes Popup Settings */
$sweepstakes_popup_title     = get_field('sweepstakes_popup_title', 'option');
$sweepstakes_popup_image_id  = get_field('sweepstakes_popup_image', 'option');
$sweepstakes_popup_image_url = MTAV_Get_Image_src($sweepstakes_popup_image_id);
$sweepstakes_popup_image_alt = MTAV_Get_Image_alt($sweepstakes_popup_image_id, 'lunchbox image');
$sweepstakes_popup_contact_form_shortcode   = get_field('sweepstakes_popup_contact_form_shortcode', 'option');

/* Sweepstakes Popup Settings */
$thankyou_popup_title     = get_field('thankyou_popup_title', 'option');
$thankyou_popup_image_id  = get_field('thankyou_popup_image', 'option');
$thankyou_popup_image_url = MTAV_Get_Image_src($thankyou_popup_image_id);
$thankyou_popup_image_alt = MTAV_Get_Image_alt($thankyou_popup_image_id, 'lunchbox image');
?>

<footer class="footer">
    <small><?php echo esc_attr($copyright_text) ?></small>
    <ul class="social-list">
        <?php if (!empty($social_share['instagram'])) {?>
        <li>
            <a href="<?php echo esc_url($social_share['instagram'])?>" target="_blank">
                <img class="lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-insta.svg"
                    alt="Instagram Logo">
            </a>
        </li>
        <?php } ?>

        <?php if (!empty($social_share['spotify'])) {?>
        <li>
            <a href="<?php echo esc_url($social_share['spotify'])?>" target="_blank">
                <img class="lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-spotify.svg"
                    alt="Spotify Logo">
            </a>
        </li>
        <?php } ?>
    </ul>
</footer>
</div>

<!-- contact form -->
<div class="contact-form-wrapper">
    <div class="contact-form">
        <img src="<?php echo esc_url($sweepstakes_popup_image_url) ?>"
            alt="<?php echo esc_attr($sweepstakes_popup_image_alt) ?>"
            class="img-breifcase" />
        <div class="contact-form-header">
            <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg" alt="" class="icon-arrow">
            <h1 class="title">
                <?php echo esc_attr($sweepstakes_popup_title); ?>
            </h1>
            <button type="button" class="btn-close">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-close-popup.svg" alt="" class="icon-close">
            </button>
        </div>
        <div class="contact-grid-wrapper">
            <?php echo do_shortcode($sweepstakes_popup_contact_form_shortcode); ?>
        </div>
    </div>
</div>

<!-- thank you  -->
<div class="thank-you-wrapper">
    <div class="thank-you">
        <div class="thank-you-header">
            <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-thumbs-up.svg" alt="" class="icon-thumbs-up">
            <h1 class="title">
                <?php echo $thankyou_popup_title ?>
            </h1>
            <button type="button" class="btn-close">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-close-popup.svg" alt="" class="icon-close">
            </button>
        </div>
        <div class="bottom-patch"></div>
        <img src="<?php echo esc_url($thankyou_popup_image_url); ?>"
            alt="<?php echo esc_attr($thankyou_popup_image_alt); ?>"
            class="img-breifcase">
    </div>
</div>

</body>
</html>
