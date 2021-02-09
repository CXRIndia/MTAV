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

<div class="common-page talent-page">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="body-content">
        <?php require THEMEPATH . '/html-template/component/banner.php'; ?>
        <?php require THEMEPATH . '/html-template/component/talent/players.php'; ?>
        <?php require THEMEPATH . '/html-template/component/talent/staff.php'; ?>
    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

</div>

<?php
get_footer();
