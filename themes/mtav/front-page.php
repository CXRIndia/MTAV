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

//get_header();

MTAV_Page_Entry_top('home-page');
?>
<div class="body-content">
    <?php require locate_template('template-parts/front-page.php'); ?>
</div>

<?php
MTAV_Page_Entry_bottom();
