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
                <img class="lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo esc_url($block_img_url); ?>" />
            </div>
        <?php endif;?>

            <div class="content-section">

            <?php if($title && !empty($title)) :?>
                <h1><?php echo wp_kses_post(MTAV_Remove_ptag($title));?></h1>
            <?php endif;?>

            <?php if($title && !empty($title)) :
                echo wp_kses_post($description);
            endif;?>

            <?php if($btn_label && !empty($btn_label)) :?>
                <a href="<?php echo esc_url($btn_url);?>"
                   class="btn btn-black"
                   <?php if($open_in_new_tab == true) : echo "target='_blank'";
                   endif;?>>
                    <?php echo wp_kses_post($btn_label);?>
                </a>
            <?php endif;?>

            </div>
        </div>
    </div>
</div>

