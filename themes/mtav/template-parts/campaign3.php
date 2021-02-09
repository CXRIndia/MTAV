<?php
/**
 * Campaign template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="fullvideo-popup">
    <div class="header">
        <a href="javascript:void(0)" class="js-video-close">
            <img class="lazyload"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/modal-close.svg" alt="">
        </a>
    </div>
    <div class="popup-body">
    <iframe src="<?php echo esc_url(MTAV_Get_Youtube_Video_url($video_url));?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

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

            <?php if($form_shortcode && !empty($form_shortcode)) :
                echo do_shortcode($form_shortcode);
            endif;?>

        </div>
    </div>
</div>

<div class="campaign-launch--wrapper" >
    <div class="container">
        <div class="campign-launch--inner">
            <div class="mobile-heading" data-aos="fade-right">
                <div class="heading-compo black">
                    <div class="line-block">
                        <div class="left-block">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <?php if($videp_sec_title && !empty($videp_sec_title)) :?>
                    <h1><?php echo wp_kses_post($videp_sec_title);?></h1>
                <?php endif;?>
            </div>
            <div class="content" data-aos="fade-right">
                <div class="heading-compo black">
                    <div class="line-block">
                        <div class="left-block">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <?php if($videp_sec_title && !empty($videp_sec_title)) :?>
                    <h1><?php echo wp_kses_post($videp_sec_title);?></h1>
                <?php endif;?>

                <?php if($$video_sec_description && !empty($$video_sec_description)) :?>
                <div class="para">
                    <?php echo wp_kses_post($$video_sec_description);?>
                </div>
                <?php endif;?>
            </div>
            <div class="video" data-aos="fade-left">
                <a href="javascript:void(0)" class="js-fullvideo">
                    <img class="lazyload play-icon"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/play.svg"/>
                    <img class="lazyload thumbnail-image"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url($video_thumb_img_url); ?>" />
                </a>
            </div>
        </div>
    </div>
</div>
