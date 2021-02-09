<?php
/**
 * Single page to collect all data.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

MTAV_Page_Entry_top('');

?>

<div class="body-content">
    <?php
    while ( have_posts() ) :
        the_post();
        get_template_part('template-parts/components/banner');
        the_content();
    endwhile;
    ?>
</div>

<?php MTAV_Page_Entry_bottom();


