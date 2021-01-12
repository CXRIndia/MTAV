<?php
/**
 * Template Name: thank you
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */
get_header();
?>

<div class="thank-you-wrapper">
    <div class="thank-you">
        <div class="thank-you-header">
            <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-thumbs-up.svg" alt="" class="icon-thumbs-up">
            <h1 class="title"><span>Thank You for Entering!</span><span>We Have Sent You a Confirmation Email, Good Luck!</span></h1>
            <button type="button" class="btn-close">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-close-popup.svg" alt="" class="icon-close">
            </button>
        </div>
        <div class="bottom-patch"></div>
        <img src="<?php echo STYLESHEETURI ?>/assets/images/png/image-briefcase-popup.png" alt="" class="img-breifcase">
    </div>
</div>

<?php
get_footer();
