<?php
/**
 * The sidebar containing the main widget area
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

if (! is_active_sidebar('sidebar-1') ) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->
