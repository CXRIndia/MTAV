<?php
/**
 * Template Name: What have We Done
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

 MTAV_Page_Entry_top('whatwedone-page');
?>

<div class="body-content">
    <?php
    get_template_part('template-parts/components/banner');
    get_template_part('template-parts/components/lookback');
    ?>

</div>

<?php MTAV_Page_Entry_bottom();
