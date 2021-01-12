<?php
/**
 * Template part for displaying page content in page.php
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- <div class="page-home"> -->
        <?php the_content(); ?>
    <!-- </div> -->
</article>
