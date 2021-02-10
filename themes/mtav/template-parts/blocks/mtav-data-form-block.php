<?php
/**
 * MTAV data with form block.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="contactinfo-compo">
    <div class="container">
        <div class="conatctinfo-wrapper">

            <div class="content-block" data-aos="fade-right">
                <div class="heading-compo black">
                    <div class="line-block">
                        <div class="left-block">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <?php if($title && !empty($title)) :?>
                    <h1 class="main-title">
                        <?php echo wp_kses_post($title);?>
                    </h1>
                <?php endif;?>

                <?php if($description && !empty($description)) :?>
                    <p class="content">
                        <?php echo wp_kses_post(MTAV_Remove_ptag($description));?>
                    </p>
                <?php endif;?>
            </div>

            <?php if($form_code && !empty($form_code)) :?>
            <div class="form-wrapper" data-aos="fade-left">
                <?php echo $form_code;?>
            </div>
            <?php endif;?>

            <?php if($form_shortcode && !empty($form_shortcode)) : ?>
            <div class="form-wrapper" data-aos="fade-left">
                <?php echo do_shortcode($form_shortcode); ?>
            </div>
            <?php endif;?>

        </div>
    </div>
</div>

