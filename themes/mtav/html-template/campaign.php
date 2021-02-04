<?php
/**
 * Template Name: Campaign - HTML
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

<div class="common-page campaign-page">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="body-content letter-main-wrapper">
        <?php require THEMEPATH . '/html-template/component/banner.php'; ?>
        <?php require THEMEPATH . '/html-template/component/the-impact.php'; ?>
        <?php require THEMEPATH . '/html-template/component/need-solve.php'; ?>
        <?php require THEMEPATH . '/html-template/component/campaign/map.php'; ?>
        <?php require THEMEPATH . '/html-template/component/campaign-launch.php'; ?>
        <?php require THEMEPATH . '/html-template/component/inthe-media.php'; ?>
        <?php require THEMEPATH . '/html-template/component/our-partners.php'; ?>
    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

 </div>

<?php
get_footer();
