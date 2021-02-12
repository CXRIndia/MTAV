<?php
/**
 * MTAV media block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<?php if($media_ids && !empty($media_ids)) :
    switch (count($media_ids)) {
    case '1':
        $arrowClass = ' one-silde';
        break;

    case '2':
        $arrowClass = ' two-silde';
        break;

    default:
        $arrowClass = '';
        break;
    }
    ?>
<div class="the-media--wrapper">
    <div class="container">
        <div>
            <div class="heading-compo black">
                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <?php if($title && !empty($title)) :?>
            <h1><?php echo wp_kses_post($title);?></h1>
            <?php endif;?>

        </div>
    </div>

    <div class="media-slider-wrapper">
        <div class="container" id="sliderPadding"></div>
            <div class="swiper-container media-slider">
                <div class="swiper-wrapper">

            <?php foreach ($media_ids as $media_id) {
                $media_title = get_field('title', $media_id);
                $media_btn_label = get_field('button_label', $media_id);
                $media_btn_url = get_field('button_link', $media_id);
                $media_img_id = get_field('media_image', $media_id);
                $media_img_array = wp_get_attachment_image_src($media_img_id, 'full');
                $media_img_alt   = MTAV_Get_Image_alt($media_img_id, "Column Image");
                $media_img_url   = MTAV_Get_image($media_img_array);
                ?>
                <div class="swiper-slide lazyload"
                    data-bg="<?php echo esc_url($media_img_url); ?>">
                    <div class="slider-content">
                    <?php if($media_title && !empty($media_title)) :?>
                        <div class="title">
                            <?php echo wp_kses_post(MTAV_Remove_ptag($media_title));?>
                        </div>
                    <?php endif;?>

                    <?php if($media_btn_label && !empty($media_btn_label)) :?>
                        <a href="<?php echo esc_url($media_btn_url);?>"
                            class="btn btn-primary"
                            target="_blank">
                            <?php echo wp_kses_post($media_btn_label);?>
                        </a>
                    <?php endif;?>

                    </div>
                </div>
            <?php }
            ?>
            </div>
        </div>
    </div>

    <div class="container<?php echo esc_attr($arrowClass)?>">
        <div class="media-slider--buttons">
            <!-- Add Arrows -->
            <div class="swiper-button-next media-next lazyload"
                data-bg="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/media-slider-next.svg"></div>
            <div class="swiper-button-prev media-prev lazyload"
                data-bg="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/media-slider-prev.svg"></div>
        </div>
    </div>
</div>
<?php endif;?>
