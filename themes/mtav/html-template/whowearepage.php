<?php
/**
 * Template Name: WhoWeArepage
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

<div class="common-page whoweare-page">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="body-content">

    <?php include THEMEPATH . '/html-template/component/whoweare/whoweare-banner.php'; ?>
    <?php include THEMEPATH . '/html-template/component/whoweare/educate-section.php'; ?>
    <?php include THEMEPATH . '/html-template/component/whoweare/ivoted.php'; ?>
    <?php include THEMEPATH . '/html-template/component/whoweare/structure-section.php'; ?>
    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

 </div>

<?php
get_footer();
