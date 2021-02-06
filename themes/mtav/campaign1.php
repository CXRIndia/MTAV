<?php
/**
 * Template Name: Campaign Template 1
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
$form_code   = $all_fields['form_code'];

?>

<div class="body-content campaigntemplate-main-wrapper">
    <?php
    while ( have_posts() ) :
        the_post();
        include locate_template('template-parts/campaign1.php');
    endwhile;
    ?>
</div>

<?php MTAV_Page_Entry_bottom();
