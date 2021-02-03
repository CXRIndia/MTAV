<?php
/**
 * Structure block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="structure-section">
    <div class="container">
        <div class="heading-compo black">
            <div class="line-block">
                <div class="left-block">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <?php if($section_title && !empty($section_title)) :?>
        <h1><?php echo wp_kses_post($section_title); ?></h1>
        <?php endif; ?>

        <?php if($structure_data && !empty($structure_data)) :?>
        <div class="structure-block">
            <?php
            foreach ($structure_data as $key => $data) {
                $top_left_img_id     = $data['top_block_left_image'];
                $top_left_img_array  = wp_get_attachment_image_src($top_left_img_id, 'full');
                $top_left_img_alt    = MTAV_Get_Image_alt($top_left_img_id, "Top Left Image");
                $top_left_img_url    = MTAV_Get_image($top_left_img_array);
                $top_right_img_id    = $data['top_block_right_image'];
                $top_right_img_array = wp_get_attachment_image_src($top_right_img_id, 'full');
                $top_right_img_alt   = MTAV_Get_Image_alt($top_right_img_id, "Top Right Image");
                $top_right_img_url   = MTAV_Get_image($top_right_img_array);
                $top_block_title     = $data['top_block_title'];
                $block_title         = $data['title'];
                $block_desc          = $data['description'];


                if ($key % 2 == 0) {
                    ?>
            <div class="block-left block-wrapper">
                <div class="block-top">

                    <?php if($top_left_img_id && !empty($top_left_img_id)) :?>
                    <div class="block-top-left">
                        <img class="lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo esc_url($top_left_img_url); ?>"
                             alt="<?php echo wp_kses_post($top_left_img_alt); ?>">
                    </div>
                    <?php endif;?>

                    <div class="block-top-right">

                    <?php if($top_right_img_id && !empty($top_right_img_id)) :?>
                        <div class="c-section">
                            <img class="lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="<?php echo esc_url($top_right_img_url); ?>"
                                 alt="<?php echo wp_kses_post($top_right_img_alt); ?>">
                        </div>
                    <?php endif;?>

                    <?php if($top_block_title && !empty($top_block_title)) :?>
                        <h5 class="text">
                            <?php echo wp_kses_post(MTAV_Remove_ptag($top_block_title));?>
                        </h5>
                    <?php endif; ?>

                    </div>
                </div>

                <div class="block-bottom">
                    <?php if($block_title && !empty($block_title)) :?>
                    <h4>
                        <?php echo wp_kses_post(MTAV_Remove_ptag($block_title));?>
                    </h4>
                    <?php endif; ?>
                    <?php if($block_desc && !empty($block_desc)) :
                        echo wp_kses_post($block_desc);
                    endif;?>
                </div>
            </div>
                    <?php
                } else {?>
            <div class="block-right block-wrapper">
                <div class="block-top">

                    <?php if($top_left_img_id && !empty($top_left_img_id)) :?>
                    <div class="block-top-left">
                        <img class="lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo esc_url($top_left_img_url); ?>"
                             alt="<?php echo wp_kses_post($top_left_img_alt); ?>">
                    </div>
                    <?php endif;?>

                    <div class="block-top-right">

                    <?php if($top_right_img_id && !empty($top_right_img_id)) :?>
                        <div class="c-section">
                            <img class="lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="<?php echo esc_url($top_right_img_url); ?>"
                                 alt="<?php echo wp_kses_post($top_right_img_alt); ?>">
                        </div>
                    <?php endif;?>

                    <?php if($top_block_title && !empty($top_block_title)) :?>
                        <h5 class="text">
                            <?php echo wp_kses_post(MTAV_Remove_ptag($top_block_title));?>
                        </h5>
                    <?php endif; ?>

                    </div>
                </div>
                <div class="block-bottom">
                    <?php if($block_title && !empty($block_title)) :?>
                    <h4>
                        <?php echo wp_kses_post(MTAV_Remove_ptag($block_title));?>
                    </h4>
                    <?php endif; ?>
                    <?php if($block_desc && !empty($block_desc)) :
                        echo wp_kses_post($block_desc);
                    endif;?>
                </div>
            </div>
                <?php }
            }?>
        </div>
        <?php endif; ?>

    </div>
</div>


