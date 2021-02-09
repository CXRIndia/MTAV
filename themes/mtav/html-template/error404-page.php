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

<div class="common-page error404-page header-position">

    <?php get_template_part('template-parts/content-header'); ?>

    <div class="body-content">
        <div class="content-div">
            <div class="container">
                <div class="heading-compo black">
                    <div class="line-block">
                        <div class="left-block">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <h1 class="main-title">
                    NOT FOUND
                </h1>
                <p class="content">
                    You just hit a route that doesn't exist... the sadness.
                </p>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/content-footer'); ?>

</div>

<?php
get_footer();
