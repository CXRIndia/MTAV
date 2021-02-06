<?php
/**
 * Template Name: Campaign Template 2
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

MTAV_Page_Entry_top('campaigntemplate-page header-position');

$page_id     = get_the_ID();
$all_fields  = get_fields($page_id);
$title       = $all_fields['title'];
$description = $all_fields['description'];
$video_thumb_img_id = $all_fields['video_thumbnail_image'];
$video_url    = $all_fields['video_url'];

if ($video_thumb_img_id && !empty($video_thumb_img_id)) {
    $video_thumb_img_array = wp_get_attachment_image_src($video_thumb_img_id, 'full');
    $video_thumb_img_alt   = MTAV_Get_Image_alt($video_thumb_img_id, "Column Image");
    $video_thumb_img_url   = MTAV_Get_image($video_thumb_img_array);
}
?>

<div class="body-content campaigntemplate-main-wrapper">
    <?php
    while ( have_posts() ) :
        the_post();
        include locate_template('template-parts/campaign2.php');
    endwhile;
    ?>
</div>

<?php MTAV_Page_Entry_bottom();
