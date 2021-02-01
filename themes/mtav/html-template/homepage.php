<?php
/**
 * Template Name: Homapage
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

<div class="common-page home-page">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="body-content">

        <?php require THEMEPATH . '/html-template/component/home/home-banner.php'; ?>

        <?php require THEMEPATH . '/html-template/component/home/imgvideo-title.php'; ?>

        <?php require THEMEPATH . '/html-template/component/home/home-whoweare.php'; ?>

        <?php require THEMEPATH . '/html-template/component/home/home-bythenumber.php'; ?>

    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

 </div>

<?php
get_footer();
