<?php
/**
 * Template Name: Talent - HTML
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

<div class="common-page talent-page">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="body-content">
        <?php include THEMEPATH . '/html-template/component/banner.php'; ?>
    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

</div>

<?php
get_footer();
