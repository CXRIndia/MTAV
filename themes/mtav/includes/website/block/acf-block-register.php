<?php
/**
 * Common Gutenberg ACF Block register file.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

 /**
  * Function used to register the custom acf gutenberg blocks.
  *
  * @return $array gutenberg block
  */
function MTAV_Acf_init()
{
    if (function_exists('acf_register_block') ) {

        acf_register_block_type(
            array(
            'name'              => 'mtav-tiles-block',
            'title'             => __('MTAV Homepage Tiles Block'),
            'description'       => __('A custom tiles format block.'),
            'render_callback'   => 'MTAV_Tiles_Block_Render_callback',
            'category'          => 'mtav',
            'icon'              => 'id-alt',
            'keywords'          => array( 'image' ),
            )
        );

        acf_register_block_type(
            array(
            'name'              => 'mtav-who-we-are-block',
            'title'             => __('MTAV Homepage Who We Are Block'),
            'description'       => __('A custom who we are format block.'),
            'render_callback'   => 'MTAV_Who_We_Are_Block_Render_callback',
            'category'          => 'mtav',
            'icon'              => 'id-alt',
            'keywords'          => array( 'image' ),
            )
        );

        acf_register_block_type(
            array(
            'name'              => 'mtav-numbers-slider-block',
            'title'             => __('MTAV Homepage Numbers Sliders Block'),
            'description'       => __('A custom numbers slider format block.'),
            'render_callback'   => 'MTAV_Numbers_Slider_Block_Render_callback',
            'category'          => 'mtav',
            'icon'              => 'id-alt',
            'keywords'          => array( 'image' ),
            )
        );

    }
}

add_action('acf/init', 'MTAV_Acf_init');
