<?php
/**
 * Index template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

// Silent is Gold

get_header(); ?>

<div class="common-page">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="main">
        <div class="container">
            <h1>Test</h1>
        </div>
        <!-- <div class="banner-wrapper" style="background-image: url('<?php echo  esc_url(THEMEURI); ?>/assets/images/png/bg-gradient.png');"></div> -->
    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

</div>

<?php
get_footer();
