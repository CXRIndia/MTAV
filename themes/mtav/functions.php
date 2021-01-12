<?php
/**
 * Theme functions
 * php version 7.4

 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

define('THEMEPATH', get_template_directory());
define('THEMEURI', get_template_directory_uri());
define('STYLESHEETURI', get_stylesheet_directory_uri());

if (!function_exists('MTAV_setup')) {

    /**
     * Theme setup function
     *
     * @return void.
     */
    function MTAV_setup()
    {

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'MTAV'),
            )
        );

        add_theme_support(
            'html5',
            array(
                'gallery',
                'caption',
            )
        );
        add_theme_support('customize-selective-refresh-widgets');
    }
}
add_action('after_setup_theme', 'MTAV_setup');

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function MTAV_scripts()
{

    $distFileJson = file_get_contents(__DIR__ . '/dist/assets.json');
    $distFile = json_decode($distFileJson, true);

    wp_enqueue_script('MTAV-js', STYLESHEETURI . '/dist/' . $distFile['website']['js'], array('jquery'), null, true);
    wp_enqueue_style('MTAV-css', STYLESHEETURI . '/dist/' . $distFile['website']['css']);

    wp_localize_script(
        'MTAV-js',
        'MTAV_js_var',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
    );

}
add_action('wp_enqueue_scripts', 'MTAV_scripts');

/**
 * Admin Enqueue scripts and styles.
 *
 * @return void
 */
function MTAV_Admin_scripts()
{
    if (!did_action('wp_enqueue_media')) {
        wp_enqueue_media();
    }

    wp_enqueue_style('jquery');
}
add_action('admin_enqueue_scripts', 'MTAV_Admin_scripts');

/**
 * Admin functions include - START
 */

if (is_admin()) {

    include THEMEPATH . '/includes/admin/admin-functions.php';
}

/**
 * Website functions include - START
 */

require THEMEPATH . '/includes/website/website-functions.php';
