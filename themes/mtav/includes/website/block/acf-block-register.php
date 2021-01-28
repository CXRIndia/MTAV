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
function Wacoal_Acf_init()
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

    }
}

add_action('acf/init', 'Wacoal_Acf_init');
