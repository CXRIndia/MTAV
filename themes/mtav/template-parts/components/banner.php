<?php
/**
 * Template part for displaying page banner content
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

$page_id                = get_the_ID();
$mtav_banner_fields     = get_fields($page_id);
$top_banner_data        = $mtav_banner_fields['top_banner_settings'];
$mtav_banner_image_id   = $top_banner_data['banner_background_image'];
$mtav_banner_title      = $top_banner_data['banner_title'];
$mtav_banner_subtitle   = $top_banner_data['banner_subtitle'];
$mtav_banner_subhead    = $top_banner_data['banner_subhead'];
$mtav_banner_btn_label  = $top_banner_data['button_label'];
$mtav_banner_btn_url    = $top_banner_data['button_url'];
$mtav_banner_img_url    = '';

if ($mtav_banner_image_id && !empty($mtav_banner_image_id)) {
    $mtav_banner_img_array = wp_get_attachment_image_src($mtav_banner_image_id, 'full');
    $mtav_banner_img_alt   = MTAV_Get_Image_alt($mtav_banner_image_id, "mtav banner image");
    $mtav_banner_img_url   = MTAV_Get_image($mtav_banner_img_array);
}
?>

<div class="banner" style="background-image: url('<?php echo  esc_url($mtav_banner_img_url); ?>')">
    <div class="inner-wrapper">
        <div class="container">
            <div class="heading-compo">

            <?php if($mtav_banner_subhead && !empty($mtav_banner_subhead)) :?>
                <h5 class="title">
                    <?php echo wp_kses_post($mtav_banner_subhead); ?>
                </h5>
            <?php endif; ?>

                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                        <img class="lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/title-icon-wh.svg" alt="">
                    </div>
                    <div class="right-block">
                        <span></span>
                    </div>
                </div>
            </div>

            <?php if($mtav_banner_title && !empty($mtav_banner_title)) :?>
                <h1 class="brand-white">
                    <?php echo wp_kses_post(MTAV_Remove_ptag($mtav_banner_title)); ?>
                </h1>
            <?php endif; ?>

            <?php if($mtav_banner_subtitle && !empty($mtav_banner_subtitle)) :?>
                <?php echo wp_kses_post($mtav_banner_subtitle); ?>
            <?php endif; ?>

            <?php if($mtav_banner_btn_label && !empty($mtav_banner_btn_label)) :?>
            <button class="btn btn-primary">
                <?php echo wp_kses_post($mtav_banner_btn_label); ?>
            </button>
            <?php endif; ?>

        </div>
    </div>
</div>