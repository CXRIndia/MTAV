<?php
/**
 * Common Gutenberg ACF Block callback functions file.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

/**
 * Callback function for image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Tiles_Block_Render_callback( $block )
{
    $background_image_id = get_field('background_image');
    $shortcode_template  = 'template-parts/blocks/banner/banner.php';

    if (! empty($background_image_id) ) {

        if (is_admin()) {
            echo MTAV_WP_Backend_edit('Dropbox Banner Block');
        } else {
            $background_image_url   = MTAV_Get_Image_src($background_image_id);
            $block_image_id         = get_field('block_image');
            $block_image_url        = MTAV_Get_Image_src($block_image_id);
            $block_image_alt        = MTAV_Get_Image_alt($block_image_id, 'logo');
            $content_text           = get_field('content_text');

            include locate_template($shortcode_template);
        }
    } else {
        if (is_admin() ) {
            ?>
            <h4>
                <u>Dropbox Banner Block:</u>
            </h4>
            <span style="color:red">Empty Dropbox Block</span>
            <?php
        }
    }
}
