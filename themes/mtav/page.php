<?php
/**
 * Single page to collect all data.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

get_header();

$page_id                = get_the_ID();
$mtav_banner_fields     = get_fields($page_id);
$top_banner_data        = $mtav_banner_fields['top_banner_settings'];
$mtav_banner_image_id   = $top_banner_data['banner_background_image'];
$mtav_banner_title      = $top_banner_data['banner_title'];
$mtav_banner_subtitle   = $top_banner_data['banner_subtitle'];
$mtav_banner_subhead    = $top_banner_data['banner_subhead'];
$mtav_banner_btn_label  = $top_banner_data['button_label'];
$mtav_banner_btn_url    = $top_banner_data['button_url'];

if ($mtav_banner_image_id && !empty($mtav_banner_image_id)) {
    $mtav_banner_img_array = wp_get_attachment_image_src($mtav_banner_image_id, 'full');
    $mtav_banner_img_alt   = MTAV_Get_Image_alt($mtav_banner_image_id, "mtav banner image");
    $mtav_banner_img_url   = MTAV_Get_image($mtav_banner_img_array);
}
?>

<div class="common-page whoweare-page">
    <?php get_template_part('template-parts/content-header'); ?>
    <div class="body-content">
        <?php
        while ( have_posts() ) :
            the_post();
            include locate_template('template-parts/content-page.php');
        endwhile;
        ?>
    </div>

    <?php
    get_template_part('template-parts/content-footer'); ?>
</div>

<?php
get_footer();
