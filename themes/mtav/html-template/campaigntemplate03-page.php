<?php
/**
 * Php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */
get_header();
?>

<div class="common-page campaigntemplate-page header-position">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="body-content campaigntemplate-main-wrapper">
        <?php require THEMEPATH . '/html-template/component/campaign-launch.php'; ?>
    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

 </div>

<?php
get_footer();
