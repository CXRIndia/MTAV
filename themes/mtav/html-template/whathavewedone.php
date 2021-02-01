<?php
/**
 * Template Name: WhathaveWeDone
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

<div class="common-page whatwedone-page">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="body-content">
        <?php include THEMEPATH . '/html-template/component/banner.php'; ?>

        <div class="lookback-compo">
            <div class="container">
                <div class="header">
                    <div class="heading-compo black">
                        <div class="line-block">
                            <div class="left-block">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

 </div>

<?php
get_footer();
