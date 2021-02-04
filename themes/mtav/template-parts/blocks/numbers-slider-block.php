<?php
/**
 * Numbers slider block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="bythenumber-sec">
    <div class="container">
        <div class="heading-compo black">
        <?php if($subhead && !empty($subhead)) :?>
            <h5 class="title">
                <?php echo wp_kses_post($subhead); ?>
            </h5>
        <?php endif; ?>
            <div class="line-block">
                <div class="left-block">
                    <span></span>
                    <span></span>
                    <!-- <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/title-icon-wh.svg" alt=""> -->
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/title-icon-black.svg" alt="">
                </div>
                <div class="right-block">
                    <span></span>
                </div>
            </div>
        </div>

        <?php if($slider_data && !empty($slider_data)) :?>
        <div class="slider-wrapper">
            <div class="swiper-container bythenumber-slider">
                <div class="swiper-wrapper">
                <?php
                $count       = 1;
                foreach ($slider_data as $data) {
                    $title       = $data['title'];
                    $description = $data['desciption'];
                    ?>

                    <?php if(($count == 1 || $count % 3 == 1) ) :?>
                    <div class="swiper-slide">
                        <div>
                    <?php endif;?>
                            <div class="slider-content">

                            <?php if($title && !empty($title)) :?>
                                <p class="number"><?php echo wp_kses_post($title);?></p>
                            <?php endif;?>

                            <?php if($description && !empty($description)) :?>
                                <div class="content">
                                    <?php echo wp_kses_post(MTAV_Remove_ptag($description));?>
                                </div>
                            <?php endif;?>

                            </div>
                    <?php if($count % 3 == 0 ) :?>
                        </div>
                    </div>
                                <?php
                    endif;
                    $count++;
                } ?>

                </div>
            </div>
            <!-- Add Arrows -->
            <div class="arrow-wrapper">
                <div class="swiper-button-next bythenumber-next"></div>
                <div class="swiper-button-prev bythenumber-prev"></div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>


