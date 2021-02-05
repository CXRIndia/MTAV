<?php
/**
 * Template Name: Campaign Template 3
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

MTAV_Page_Entry_top('campaigntemplate-page header-position');

$page_id                = get_the_ID();
$all_fields             = get_fields($page_id);
$title                  = $all_fields['title'];
$description            = $all_fields['description'];
$form_code              = $all_fields['form_code'];
$videp_sec_title        = $all_fields['video_section_title'];
$$video_sec_description = $all_fields['video_section_description'];
$thumb_img_id           = $all_fields['video_thumbnail_image'];
$video_url              = $all_fields['video_url'];
?>

<div class="body-content campaigntemplate-main-wrapper">
    <?php
    while ( have_posts() ) :
        the_post();
        include locate_template('template-parts/campaign3.php');
    endwhile;
    ?>
</div>

<?php MTAV_Page_Entry_bottom();
