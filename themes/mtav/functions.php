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
                'primary' => esc_html__('Primary', 'MTAV'),
                'secondary' => esc_html__('Secondary', 'MTAV'),
                'footer-menu' => esc_html__('Footer', 'MTAV')
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

    wp_enqueue_script('mtav-global-js', STYLESHEETURI . '/dist/' . $distFile['global']['js'], array('jquery'), null, true);


    if (is_front_page() || is_page_template('html-template/homepage.php')) {
        wp_enqueue_script('mtav-home-js', STYLESHEETURI . '/dist/' . $distFile['home']['js'], array('jquery'), null, true);
        wp_enqueue_style('mtav-home-css', STYLESHEETURI . '/dist/' . $distFile['home']['css']);
    }

    if (is_page_template('html-template/whowearepage.php') || is_page_template('whoweare.php')) {
        wp_enqueue_script('mtav-whoweare-js', STYLESHEETURI . '/dist/' . $distFile['whoweare']['js'], array('jquery'), null, true);
        wp_enqueue_style('mtav-whoweare-css', STYLESHEETURI . '/dist/' . $distFile['whoweare']['css']);
    }

    if (is_page_template('html-template/letter.php') || is_page_template('letter.php')) {
        wp_enqueue_script('mtav-letter-js', STYLESHEETURI . '/dist/' . $distFile['letter']['js'], array('jquery'), null, true);
        wp_enqueue_style('mtav-letter-css', STYLESHEETURI . '/dist/' . $distFile['letter']['css']);
    }

    if (is_page_template('html-template/whathavewedone.php')) {
        wp_enqueue_script('mtav-whatwedone-js', STYLESHEETURI . '/dist/' . $distFile['whatwedone']['js'], array('jquery'), null, true);
        wp_enqueue_style('mtav-whatwedone-css', STYLESHEETURI . '/dist/' . $distFile['whatwedone']['css']);
    }

    if (is_page_template('html-template/talent-page.php')) {
        wp_enqueue_script('mtav-talent-js', STYLESHEETURI . '/dist/' . $distFile['talent']['js'], array('jquery'), null, true);
        wp_enqueue_style('mtav-talent-css', STYLESHEETURI . '/dist/' . $distFile['talent']['css']);
    }

    if (is_single()) {
        wp_enqueue_script('mtav-single-js', STYLESHEETURI . '/dist/' . $distFile['article']['js'], array('jquery'), null, true);
        wp_enqueue_style('mtav-single-css', STYLESHEETURI . '/dist/' . $distFile['article']['css']);
    }

    if (is_archive()) {
        wp_enqueue_script('mtav-archive-js', STYLESHEETURI . '/dist/' . $distFile['archive']['js'], array('jquery'), null, true);
        wp_enqueue_style('mtav-archive-css', STYLESHEETURI . '/dist/' . $distFile['archive']['css']);
    }

    wp_localize_script(
        'mtav-global-js',
        'mtav_js_var',
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
