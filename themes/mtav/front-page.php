<?php
/**
 * Front page template file
 * php version 7.4

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

<?php

require locate_template('template-parts/front-page.php');

get_template_part('template-parts/content-footer'); ?>

 </div>

<?php
get_footer();
