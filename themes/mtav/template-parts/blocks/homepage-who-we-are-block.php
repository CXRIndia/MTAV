<?php
/**
 * Homepage who we are block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>
<div class="container-fluid whoweare-sec">
    <div class="container">
        <div class="header-block">
            <div class="heading-compo">
            <?php if($subhead && !empty($subhead)) :?>
                <h5 class="title">
                    <?php echo wp_kses_post($subhead);?>
                </h5>
            <?php endif; ?>

                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                        <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/title-icon-wh.svg" alt="">
                    </div>
                    <div class="right-block">
                        <span></span>
                    </div>
                </div>
            </div>

            <?php if($title && !empty($title)) :?>
            <h1 class="main-title brand-white">
                <?php echo wp_kses_post(MTAV_Remove_ptag($title));?>
            </h1>
            <?php endif;?>

            <?php if($button_label && !empty($button_label)) :?>
            <div class="btn-wrapper">
                <a href="<?php echo esc_url($button_url);?>"
                   class="btn btn-primary"
                   <?php if($open_in_new_tab == true) : echo "target='_blank'";
                   endif;?>>
                    <?php echo wp_kses_post($button_label); ?>
                </a>
            </div>
            <?php endif; ?>

            <?php if($block_img_id && !empty($block_img_id)) :?>
            <div class="img-wrapper">
                <img src="<?php echo esc_url($block_img_url); ?>"
                     alt="<?php echo esc_attr($block_img_alt); ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
