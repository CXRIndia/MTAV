<?php
/**
 * Two Columns Data block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="container">

<?php if($block_title && !empty($block_title)) :?>
    <h2><?php echo wp_kses_post($block_title); ?></h2>
<?php endif;?>

    <div class="two-columned-section">

    <?php if($left_column_data && !empty($left_column_data)) :?>
        <div class="section-left">
            <?php echo wp_kses_post($left_column_data);?>
        </div>
    <?php endif; ?>

        <div class="section-right">

        <?php if($right_column_img_id && !empty($right_column_img_id)) :?>
            <img src="<?php echo esc_url($right_column_img_url); ?>" />
        <?php endif; ?>

        <?php if($right_column_data && !empty($right_column_data)) :
                echo wp_kses_post($right_column_data);
        endif;
        ?>
        </div>
    </div>
</div>


