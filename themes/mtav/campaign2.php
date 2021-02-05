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
