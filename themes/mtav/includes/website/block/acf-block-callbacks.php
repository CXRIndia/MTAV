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
 * Callback function for homepage tiles block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Tiles_Block_Render_callback( $block )
{
    $big_tile_data          = get_field('big_tile_data');
    $big_tile_title         = $big_tile_data['title'];
    $big_tile_subhead       = $big_tile_data['subhead'];
    $big_tile_img_id        = $big_tile_data['tile_background_image'];
    $big_tile_btn_label     = $big_tile_data['button_label'];
    $big_tile_btn_url       = $big_tile_data['button_url'];
    $big_tile_video_url     = $big_tile_data['video_url'];
    $big_tile_video_thum_id = $big_tile_data['video_thumbnail'];

    if ($big_tile_img_id && !empty($big_tile_img_id)) {
        $big_tile_img_array = wp_get_attachment_image_src($big_tile_img_id, 'full');
        $big_tile_img_alt   = MTAV_Get_Image_alt($big_tile_img_id, "CXR logo");
        $big_tile_img_url   = MTAV_Get_image($big_tile_img_array);
    }

    $small_tile_data    = get_field('small_tile_data');
    $view_button_label  = get_field('view_button_label');
    $view_button_url    = get_field('view_button_url');

    $shortcode_template  = 'template-parts/blocks/homepage-tiles-block.php';

    if (! empty($big_tile_data) || !empty($small_tile_data) || !empty($view_button_label) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>MTAV Tiles Block:</u></h4>
            <span style="color:red">Empty Tiles Block</span>
            <?php
        }
    }
}

/**
 * Callback function for who we are block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Who_We_Are_Block_Render_callback( $block )
{

    $title = get_field('title');
    $subhead = get_field('subhead');
    $button_label = get_field('button_label');
    $button_url = get_field('button_url');
    $block_img_id = get_field('block_image');

    if ($block_img_id && !empty($block_img_id)) {
        $block_img_array = wp_get_attachment_image_src($block_img_id, 'full');
        $block_img_alt   = MTAV_Get_Image_alt($block_img_id, "CXR logo");
        $block_img_url   = MTAV_Get_image($block_img_array);
    }

    $shortcode_template  = 'template-parts/blocks/homepage-who-we-are-block.php';

    if (! empty($title) || !empty($subhead) || !empty($block_img_id) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>MTAV Who We Are Block:</u></h4>
            <span style="color:red">Empty Who We Are Block</span>
            <?php
        }
    }
}
