<?php
/**
 * Protect black voters block template.
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

<div class="container-fluid imgvideo-title-sec-two">
    <div class="big-block-wrapper"
        style="background-image: url('<?php echo  esc_url($left_column_img_url); ?>')">
        <div class="gradient-bg"></div>
        <div class="content-block">
            <div class="heading-compo">
                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                        <img class="lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/title-icon-wh.svg" alt="">
                    </div>
                </div>
            </div>

            <?php if($left_column_title && !empty($left_column_title)) :?>
                <h1 class="title brand-white">
                    <?php echo wp_kses_post($left_column_title);?>
                </h1>
            <?php endif; ?>

            <?php
            if ($left_column_description && !empty($left_column_description)) :
                echo wp_kses_post($left_column_description);
            endif;
            ?>

            <?php if($left_column_btn_label && !empty($left_column_btn_label)) :?>
                <div class="btn-wrapper">
                    <a href="javascript:void(0)" class="btn btn-primary js-fullvideo">
                        <?php echo wp_kses_post($left_column_btn_label);?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <div class="small-block-wrapper">
    <?php if($right_column_title && !empty($right_column_title)) :?>
        <h5 class="section-title">
        <?php echo wp_kses_post($right_column_title);?>
        </h5>
    <?php endif; ?>

        <?php
        foreach ($numbers_data as $number) {
            $numbers_title = $number['numbers_title'];
            $description = $number['description'];
            ?>
        <div class="section-block">

            <?php if($numbers_title && !empty($numbers_title)) :?>
                <h2 class="count"><?php echo wp_kses_post($numbers_title);?></h2>
            <?php endif;?>

            <?php if($description && !empty($description)) :?>
            <h5 class="section-text">
                <?php echo wp_kses_post(MTAV_Remove_ptag($description));?>
            </h5>
            <?php endif;?>

        </div>
            <?php
        } ?>
    </div>
</div>

