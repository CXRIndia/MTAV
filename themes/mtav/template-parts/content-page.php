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

<div class="banner lazyload"
    data-bg="<?php echo  esc_url($mtav_banner_img_url); ?>">
    <div class="inner-wrapper">
        <div class="container">
            <div class="heading-compo">

            <?php if($mtav_banner_subhead && !empty($mtav_banner_subhead)) :?>
                <h5 class="title">
                    <?php echo wp_kses_post($mtav_banner_subhead); ?>
                </h5>
            <?php endif; ?>

                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                        <img class="lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/title-icon-wh.svg" alt="">
                    </div>
                    <div class="right-block">
                        <span></span>
                    </div>
                </div>
            </div>

            <?php if($mtav_banner_title && !empty($mtav_banner_title)) :?>
                <h1 class="brand-white">
                    <?php echo wp_kses_post(MTAV_Remove_ptag($mtav_banner_title)); ?>
                </h1>
            <?php endif; ?>

            <?php if($mtav_banner_subtitle && !empty($mtav_banner_subtitle)) :?>
                <?php echo wp_kses_post($mtav_banner_subtitle); ?>
            <?php endif; ?>

            <?php if($mtav_banner_btn_label && !empty($mtav_banner_btn_label)) :?>
            <button class="btn btn-primary">
                <?php echo wp_kses_post($mtav_banner_btn_label); ?>
            </button>
            <?php endif; ?>

        </div>
    </div>
</div>
        <?php the_content(); ?>
