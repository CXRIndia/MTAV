<?php
/**
 * Homepage tiles block template.
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
        <iframe src="<?php echo esc_url(MTAV_Get_Youtube_Video_url($big_tile_video_url));?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="container-fluid imgvideo-title-sec">
    <div class="big-block-wrapper"
        style="background-image: url('<?php echo  esc_url($big_tile_img_url); ?>')">
        <div class="gradient-bg"></div>
        <div class="content-block" data-aos="fade-right">
            <div class="heading-compo">
            <?php if($big_tile_subhead && !empty($big_tile_subhead)) : ?>
                <h5 class="title">
                    <?php echo wp_kses_post($big_tile_subhead);?>
                </h5>
            <?php endif;?>
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

            <?php if($big_tile_title && !empty($big_tile_title)) : ?>
            <h1 class="title brand-white">
                <?php echo wp_kses_post($big_tile_title);?>
            </h1>
            <?php endif; ?>

            <?php if($big_tile_video_url && !empty($big_tile_video_url)) :?>
            <div class="btn-wrapper">
                <a href="javascript:void(0)" class="btn btn-primary js-fullvideo">
                    <?php echo wp_kses_post($big_tile_btn_label);?>
                </a>
            </div>
            <?php endif;?>

            <?php if($big_tile_btn_url && !empty($big_tile_btn_url)) :?>
                <div class="btn-wrapper">
                    <a href="<?php echo esc_url($big_tile_btn_url);?>"
                    class="btn btn-primary"
                    <?php if($open_in_new_tab == true) : echo "target='_blank'";
                    endif;?>>
                        <?php echo wp_kses_post($big_tile_btn_label);?>
                    </a>
                </div>
            <?php endif;?>

        </div>
    </div>

    <div class="small-block-wrapper">
    <?php
    foreach ($small_tile_data as $small_tile) {
        $small_tile_title     = $small_tile['title'];
        $small_tile_img_id    = $small_tile['tile_background_image'];
        $small_tile_subtitle  = $small_tile['subtitle'];
        $small_tile_btn_label = $small_tile['button_label'];
        $small_tile_btn_url   = $small_tile['button_url'];
        $open_in_new_tab      = $small_tile['open_in_new_tab'];

        if ($small_tile_img_id && !empty($small_tile_img_id)) {
            $small_tile_img_array = wp_get_attachment_image_src($small_tile_img_id, 'full');
            $small_tile_img_alt   = MTAV_Get_Image_alt($small_tile_img_id, "Tile Image");
            $small_tile_img_url   = MTAV_Get_image($small_tile_img_array);
        }
        ?>
        <div class="single-block"
            style="background-image: url('<?php echo  esc_url($small_tile_img_url); ?>')">
            <div class="gradient-bg"></div>
            <div class="content-block" data-aos="fade-left">
                <div class="heading-compo">
                    <div class="line-block">
                        <div class="left-block">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

                <?php if($small_tile_title && !empty($small_tile_title)) :?>
                <h3 class="title brand-white">
                    <?php echo wp_kses_post($small_tile_title);?>
                </h3>
                <?php endif; ?>

                <?php if($small_tile_subtitle && !empty($small_tile_subtitle)) :?>
                <p class="content">
                    <?php echo wp_kses_post(MTAV_Remove_ptag($small_tile_subtitle));?>
                </p>
                <?php endif; ?>

                <?php if($small_tile_btn_label && !empty($small_tile_btn_label)) :?>
                <div class="btn-wrapper">
                    <a href="<?php echo esc_url($small_tile_btn_url);?>"
                    class="btn btn-primary"
                    <?php if($open_in_new_tab == true) : echo "target='_blank'";
                    endif;?>>
                        <?php echo wp_kses_post($small_tile_btn_label);?>
                    </a>
                </div>
                <?php endif;?>

            </div>
        </div>
        <?php
    }?>
    <?php if($view_button_label && !empty($view_button_label)) :?>
        <div class="viewmore-wrapper">
            <a href="<?php echo esc_url($view_button_url); ?>"
            <?php if($view_btn_open_in_new_tab == true) : echo "target='_blank'";
            endif;?>>
                <?php echo wp_kses_post($view_button_label);?>
            </a>
        </div>
    <?php endif; ?>
    </div>
</div>
