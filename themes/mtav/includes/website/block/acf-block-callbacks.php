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

/**
 * Callback function for black voters block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Protect_Black_Voters_Block_Render_callback( $block )
{

    $left_column_data        = get_field('left_column_data');
    $left_column_title       = $left_column_data['title'];
    $left_column_description = $left_column_data['description'];
    $left_column_img_id      = $left_column_data['block_image'];
    $left_column_btn_label   = $left_column_data['button_label'];
    $left_column_btn_url     = $left_column_data['button_url'];
    $video_url               = $left_column_data['video_url'];
    $video_thumbnail         = $left_column_data['video_thumbnail'];

    $right_column_data  = get_field('right_column_data');
    $right_column_title = $right_column_data['title'];
    $numbers_data       = $right_column_data['numbers_data'];

    if ($left_column_img_id && !empty($left_column_img_id)) {
        $left_column_img_array = wp_get_attachment_image_src($left_column_img_id, 'full');
        $left_column_img_alt   = MTAV_Get_Image_alt($left_column_img_id, "Column Image");
        $left_column_img_url   = MTAV_Get_image($left_column_img_array);
    }

    $shortcode_template  = 'template-parts/blocks/protect-black-voters-block.php';

    if (! empty($left_column_data) || !empty($right_column_data) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>MTAV Protect Black Voters Block:</u></h4>
            <span style="color:red">Protect Black Voters Block</span>
            <?php
        }
    }
}

/**
 * Callback function for I voted block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_I_Voted_Block_Render_callback( $block )
{

    $block_image_id = get_field('block_image');
    $title          = get_field('title');
    $description    = get_field('description');
    $btn_label      = get_field('button_label');
    $btn_url        = get_field('button_url');

    if ($block_image_id && !empty($block_image_id)) {
        $block_img_array = wp_get_attachment_image_src($block_image_id, 'full');
        $block_img_alt   = MTAV_Get_Image_alt($block_image_id, "Column Image");
        $block_img_url   = MTAV_Get_image($block_img_array);
    }

    $shortcode_template  = 'template-parts/blocks/i-voted-block.php';

    if (! empty($block_image_id) || !empty($title) || !empty($description) || !empty($btn_label)) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>MTAV I Voted Block:</u></h4>
            <span style="color:red">I Voted Block</span>
            <?php
        }
    }
}

/**
 * Callback function for MTAV Structure block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Structure_Block_Render_callback( $block )
{

    $section_title  = get_field('title');
    $structure_data = get_field('structure_data');

    $shortcode_template  = 'template-parts/blocks/structure-block.php';

    if (! empty($section_title) || !empty($structure_data) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>MTAV Structure Block:</u></h4>
            <span style="color:red">Structure Block</span>
            <?php
        }
    }
}

/**
 * Callback function for MTAV numbers slider block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Numbers_Slider_Block_Render_callback( $block )
{

    $subhead  = get_field('subhead');
    $slider_data = get_field('slider_data');

    $shortcode_template  = 'template-parts/blocks/numbers-slider-block.php';

    if (! empty($subhead) || !empty($slider_data) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>MTAV Numbers Slider Block:</u></h4>
            <span style="color:red">Numbers Slider Block</span>
            <?php
        }
    }
}

/**
 * Callback function for two column data block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Two_Column_Data_Block_Render_callback( $block )
{

    $block_title         = get_field('block_title');
    $left_column_data    = get_field('left_column_data');
    $right_column_img_id = get_field('right_column_image');
    $right_column_data   = get_field('right_column_data');

    if ($right_column_img_id && !empty($right_column_img_id)) {
        $right_column_img_array = wp_get_attachment_image_src($right_column_img_id, 'full');
        $right_column_img_alt   = MTAV_Get_Image_alt($right_column_img_id, "Column Image");
        $right_column_img_url   = MTAV_Get_image($right_column_img_array);
    }

    $shortcode_template  = 'template-parts/blocks/two-column-data-block.php';

    if (! empty($block_title) || !empty($left_column_data) || !empty($right_column_img_id) || !empty($right_column_data) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>MTAV Two Columns Data Block:</u></h4>
            <span style="color:red">Two Columns Data Block</span>
            <?php
        }
    }
}

/**
 * Callback function for bold content data block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Bold_Content_Block_Render_callback( $block )
{

    $bold_data = get_field('bold_content_data');

    $shortcode_template  = 'template-parts/blocks/bold-content-data-block.php';

    if (! empty($bold_data)) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>MTAV Bold Content Data Block:</u></h4>
            <span style="color:red">Bold Content Data Block</span>
            <?php
        }
    }
}
