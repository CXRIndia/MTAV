<?php
/**
 * Template Name: Contact-form
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

<div class="contact-form-wrapper">
    <div class="contact-form">
        <img src="<?php echo STYLESHEETURI ?>/assets/images/png/image-briefcase-popup.png" alt="" class="img-breifcase">
        <div class="contact-form-header">
            <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg" alt="" class="icon-arrow">
            <h1 class="title">Enter the Below Information for a Chance to Win!</h1>
            <button type="button" class="btn-close">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-close-popup.svg" alt="" class="icon-close">
            </button>
        </div>
        <div class="contact-grid-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
        </div>
    </div>
</div>

<?php
get_footer();
