<?php
/**
 * Theme Options menu settings
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => true,
        )
    );

    acf_add_options_sub_page(
        array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-settings',
        )
    );

    acf_add_options_sub_page(
        array(
        'page_title' => 'Sweepstakes Popup Settings',
        'menu_title' => 'Sweepstakes Popup',
        'parent_slug' => 'theme-settings',
        )
    );

    acf_add_options_sub_page(
        array(
        'page_title' => 'Thank You Popup Settings',
        'menu_title' => 'Thank you popup',
        'parent_slug' => 'theme-settings',
        )
    );
}