<?php
/**
 * The Need block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<?php if($block_data && !empty($block_data)) :?>
<div class="need-solve--wrapper">

        <div class="container">

            <div class="need-solve--inner-wrapper">

            <?php foreach ( $block_data as $key=>$data) {

                $title            = $data['title'];
                $description      = $data['description_data'];
                $block_img_id     = $data['image'];
                $block_img_array  = wp_get_attachment_image_src($block_img_id, 'full');
                $block_img_alt    = MTAV_Get_Image_alt($block_img_id, "Block Image");
                $block_img_url    = MTAV_Get_image($block_img_array);

                if ($key % 2 == 0) {?>
                <div class="mobile-heading">
                <div class="heading-compo black">
                    <div class="line-block">
                        <div class="left-block">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <h1><?php echo wp_kses_post($title);?></h1>
            </div>
                <div class="need-solve--left" data-aos="fade-right">
                    <div class="need-solve--content">
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

                        <?php if($description && !empty($description)) :?>
                        <div class="content-para">
                             <?php echo wp_kses_post($description);?>
                        </div>
                        <?php endif;?>

                    </div>

                    <?php if($block_img_id && !empty($block_img_id)) :?>
                    <div class="need-solve--image">
                        <img class="lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo esc_url($block_img_url); ?>" />
                    </div>
                    <?php endif;?>

                </div>
                <?php } else {?>

                <div class="need-solve--right" data-aos="fade-left">
                <div class="mobile-heading">
                        <div class="heading-compo black">
                            <div class="line-block">
                                <div class="left-block">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <h1><?php echo wp_kses_post($title);?></h1>
                    </div>
                    <?php if($block_img_id && !empty($block_img_id)) :?>
                    <div class="need-solve--image">
                        <img class="lazyload"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-src="<?php echo esc_url($block_img_url); ?>" />
                    </div>
                    <?php endif;?>

                    <div class="need-solve--content">
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

                        <?php if($description && !empty($description)) :?>
                        <div class="content-para">
                             <?php echo wp_kses_post($description);?>
                        </div>
                        <?php endif;?>

                    </div>
                </div>
                <?php }
            }?>
            </div>
        </div>

</div>

<?php endif; ?>


