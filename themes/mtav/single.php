<?php
/**
 * Single post to collect all data
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

<div class="main">
    <p>Single text </p>
    <?php the_content(); ?>
</div>

<?php
get_footer();
