<?php
/**
 * Bold Content Data block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<?php if($bold_data && !empty($bold_data)) :?>
<div class="container">
    <div class="signed-section">
        <h2>
            <?php echo wp_kses_post(MTAV_Remove_ptag($bold_data));?>
        </h2>
    </div>
</div>
<?php endif;?>


