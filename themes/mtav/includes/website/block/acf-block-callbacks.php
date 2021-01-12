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
function MTAV_Banner_Block_Render_callback( $block )
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


/**
 * Callback function for image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_About_Block_Render_callback( $block )
{
    $block_image_desktop_id     = get_field('block_image_desktop');
    $block_image_desktop_url    = MTAV_Get_Image_src($block_image_desktop_id);
    $block_image_desktop_alt    = MTAV_Get_Image_alt($block_image_desktop_id, 'lunchbox image');
    $block_image_mobile_id      = get_field('block_image_mobile');
    $block_image_mobile_url     = MTAV_Get_Image_src($block_image_mobile_id);
    $block_image_mobile_alt     = MTAV_Get_Image_alt($block_image_mobile_id, 'lunchbox image');
    $about_section              = get_field('about_section');
    $lunchbox_section           = get_field('lunchbox_section');

    $shortcode_template = 'template-parts/blocks/about/about.php';

    if (! empty($about_section) && ! empty($lunchbox_section)) {

        if (is_admin()) {
            echo MTAV_WP_Backend_edit('Dropbox About Block');
        } else {
            include locate_template($shortcode_template);
        }
    } else {
        if (is_admin() ) {
            ?>
            <h4>
                <u>Dropbox About Block:</u>
            </h4>
            <span style="color:red">Empty Dropbox Block</span>
            <?php
        }
    }
}


/**
 * Callback function for image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Tab_Block_Render_callback( $block )
{
    $data = $block['data'];

    $tab1_name  = get_field('tab1_name');
    $tab2_name  = get_field('tab2_name');
    $tab3_name  = get_field('tab3_name');

    $panel1 = get_field('panel1');
    $panel2 = get_field('panel2');
    $panel3 = get_field('panel3');

    $shortcode_template = 'template-parts/blocks/tab/tab.php';

    if (! empty($tab1_name) || ! empty($tab2_name) || ! empty($tab3_name) ) {
        if (is_admin()) {
            echo MTAV_WP_Backend_edit('Dropbox Tab Block');
        } else {
            include locate_template($shortcode_template);
        }
    } else {
        if (is_admin() ) {
            ?>
            <h4>
                <u>Dropbox Tab Block:</u>
            </h4>
            <span style="color:red">Empty Dropbox Block</span>
            <?php
        }
    }
}


/**
 * Callback function for image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Sweepstakes_Block_Render_callback( $block )
{
    $block_image_id         = get_field('block_image');
    $block_image_url        = MTAV_Get_Image_src($block_image_id);
    $block_image_alt        = MTAV_Get_Image_alt($block_image_id, 'lunchbox image');
    $title                  = get_field('title');
    $subtext                = get_field('subtext');
    $link_text              = get_field('link_text');

    $shortcode_template = 'template-parts/blocks/sweepstakes/sweepstakes.php';

    if (! empty($title) ) {
        if (is_admin()) {
            echo MTAV_WP_Backend_edit('Dropbox Sweeptakes Block');
        } else {
            include locate_template($shortcode_template);
        }
    } else {
        if (is_admin() ) {
            ?>
            <h4>
                <u>Dropbox Sweepstakes Block:</u>
            </h4>
            <span style="color:red">Empty Dropbox Block</span>
            <?php
        }
    }
}

/**
 * Callback function for image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Care_Package_Block_Render_callback( $block )
{
    $background_image_id    = get_field('background_image');
    $background_image_url   = MTAV_Get_Image_src($background_image_id);
    $background_image_alt   = MTAV_Get_Image_alt($background_image_id, 'lunchbox image');
    $title                  = get_field('title');
    $subtext                = get_field('subtext');
    $button_text            = get_field('button_text');
    $button_link            = get_field('button_link');

    $shortcode_template = 'template-parts/blocks/care-package/care-package.php';

    if (! empty($title) ) {
        if (is_admin()) {
            echo MTAV_WP_Backend_edit('Dropbox Care Package Block');
        } else {
            include locate_template($shortcode_template);
        }
    } else {
        if (is_admin() ) {
            ?>
            <h4>
                <u>Dropbox Care Package Block:</u>
            </h4>
            <span style="color:red">Empty Dropbox Block</span>
            <?php
        }
    }
}


/**
 * Callback function for image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function MTAV_Insta_Spotify_Block_Render_callback( $block )
{
    $spotify = get_field('spotify');
    $instagram = get_field('instagram');

    $shortcode_template = 'template-parts/blocks/insta-spotify/insta-spotify.php';

    if (! empty($spotify['spotify_url']) && ! empty($instagram['shortcode']) ) {
        if (is_admin()) {
            echo MTAV_WP_Backend_edit('Dropbox Insta/Spotify Block');
        } else {
            include locate_template($shortcode_template);
        }
    } else {
        if (is_admin() ) {
            ?>
            <h4>
                <u>Dropbox Insta/Spotify Block:</u>
            </h4>
            <span style="color:red">Empty Dropbox Block</span>
            <?php
        }
    }
}
