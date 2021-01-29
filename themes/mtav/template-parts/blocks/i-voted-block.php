<?php
/**
 * I voted block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="ivoted-section">
    <div class="container">
        <div class="ivoted-inner-wrapper">

        <?php if($block_image_id && !empty($block_image_id)) :?>
            <div class="image-wrapper">
                <img src="<?php echo esc_url($block_img_url); ?>" />
            </div>
        <?php endif;?>

            <div class="content-section">

            <?php if($title && !empty($title)) :?>
                <h1><?php echo wp_kses_post($title);?></h1>
            <?php endif;?>

            <?php if($title && !empty($title)) :
                echo wp_kses_post($description);
            endif;?>

            <?php if($btn_label && !empty($btn_label)) :?>
                <button class="btn btn-black">
                    <?php echo wp_kses_post($btn_label);?>
                </button>
            <?php endif;?>

            </div>
        </div>
    </div>
</div>

