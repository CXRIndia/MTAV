<?php
/**
 * Plugin Name:     Test block
 * Description:     This is example test block
 * Version:         0.1.0
 * Author:          Cemtrexlabs
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     clabs
 *
 * @package clabs-gutenberg
 */

function clabs_gutenberg_clabs_block_init()
{
    $dir = __DIR__;

    $script_asset_path = "$dir/build/index.asset.php";
    if (! file_exists($script_asset_path) ) {
        throw new Error(
            'You need to run `npm start` or `npm run build` for the "clabs-gutenberg/clabs" block first.'
        );
    }

    $index_js     = 'build/index.js';
    $script_asset = include $script_asset_path;
    wp_register_script(
        'clabs-gutenberg-block-editor',
        plugins_url($index_js, __FILE__),
        $script_asset['dependencies'],
        $script_asset['version']
    );
    wp_set_script_translations('clabs-gutenberg-block-editor', 'clabs');

    $editor_css = 'build/index.css';
    wp_register_style(
        'clabs-gutenberg-block-editor',
        plugins_url($editor_css, __FILE__),
        array(),
        filemtime("$dir/$editor_css")
    );

    $style_css = 'build/index.css';
    wp_register_style(
        'clabs-gutenberg-block',
        plugins_url($style_css, __FILE__),
        array(),
        filemtime("$dir/$style_css")
    );

    register_block_type(
        'clabs-gutenberg/clabs',
        array(
        'editor_script' => 'clabs-gutenberg-block-editor',
        'editor_style'  => 'clabs-gutenberg-block-editor',
        'style'         => 'clabs-gutenberg-block',
        )
    );
}
add_action('init', 'clabs_gutenberg_clabs_block_init');
