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

        acf_register_block(
            array(
            'name'            => 'dropbox-banner-block',
            'title'           => __('Dropbox Banner Block'),
            'description'     => __('A custom banner block.'),
            'render_callback' => 'MTAV_Banner_Block_Render_callback',
            'category'        => 'dropbox',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array( 'dropbox banner block', 'dropbox banner', 'banner block', 'dropbox' ),
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                      'image'   => "Your image is here",
                      'image_caption'        => "Your image_caption is here"
                    )
                )
            )
            )
        );

        acf_register_block(
            array(
            'name'              => 'dropbox-about-block',
            'title'             => __('Dropbox About Block'),
            'description'       => __('A custom about block.'),
            'render_callback'   => 'MTAV_About_Block_Render_callback',
            'category'          => 'dropbox',
            'icon'              => 'format-quote',
            'keywords'          => array( 'about block', 'about', 'dropbox about', 'dropbox' ),
            )
        );

        acf_register_block(
            array(
            'name'              => 'dropbox-tab-block',
            'title'             => __('Dropbox Tab Block'),
            'description'       => __('A custom tab block.'),
            'render_callback'   => 'MTAV_Tab_Block_Render_callback',
            'category'          => 'dropbox',
            'icon'              => 'format-quote',
            'keywords'          => array( 'tab block', 'tab', 'city', 'dropbox city', 'dropbox tab', 'dropbox' ),
            )
        );

        acf_register_block(
            array(
            'name'              => 'dropbox-sweepstakes-block',
            'title'             => __('Dropbox Sweepstakes Block'),
            'description'       => __('A custom sweepstakes block.'),
            'render_callback'   => 'MTAV_Sweepstakes_Block_Render_callback',
            'category'          => 'dropbox',
            'icon'              => 'format-quote',
            'keywords'          => array( 'sweepstakes block', 'sweepstakes', 'dropbox sweepstakes', 'dropbox'  ),
            )
        );

        acf_register_block(
            array(
            'name'              => 'dropbox-care-package-block',
            'title'             => __('Dropbox Care Package Block'),
            'description'       => __('A custom care package block.'),
            'render_callback'   => 'MTAV_Care_Package_Block_Render_callback',
            'category'          => 'dropbox',
            'icon'              => 'format-quote',
            'keywords'          => array( 'care package block', 'care package', 'dropbox care package', 'dropbox' ),
            )
        );

        acf_register_block(
            array(
            'name'              => 'dropbox-inst-spotify-block',
            'title'             => __('Dropbox Insta/Spotify Block'),
            'description'       => __('A custom insta & spotify block.'),
            'render_callback'   => 'MTAV_Insta_Spotify_Block_Render_callback',
            'category'          => 'dropbox',
            'icon'              => 'format-quote',
            'keywords'          => array( 'insta spotify block', 'insta spotify', 'dropbox insta spotify', 'dropbox' ),
            )
        );

    }
}

add_action('acf/init', 'Wacoal_Acf_init');
