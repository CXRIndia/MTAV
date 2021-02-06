<?php
/**
 * Template Name: Cookie Policy
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

MTAV_Page_Entry_top('has-black-hamburger campaigntemplate-page header-position');
?>

<div class="body-content content-main-wrapper">
    <?php
    while ( have_posts() ) :
        the_post();
        include locate_template('template-parts/cookie-policy.php');
    endwhile;
    ?>
</div>

<?php MTAV_Page_Entry_bottom();
