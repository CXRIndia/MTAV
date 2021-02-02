<?php
/**
 * Campaign Post Type
 * php version 7.4
 *
 * @category CXR
 * @package  CXR
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     CXR
 */

/**
 * To Change WP default post name in admin menu
 *
 * @return void
 */
function MTAV_Change_Post_label()
{
    global $menu;
    global $submenu;
    $menu[5][0] = 'Campaign';
    $submenu['edit.php'][5][0] = 'Campaign';
    $submenu['edit.php'][10][0] = 'Add Campaign';
    $submenu['edit.php'][16][0] = 'Campaign Tags';
}
add_action('admin_menu', 'MTAV_Change_Post_label');

/**
 * To Change WP default post name
 *
 * @return void
 */
function MTAV_Change_Post_object()
{
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Campaign';
    $labels->singular_name = 'Campaign';
    $labels->add_new = 'Add Campaign';
    $labels->add_new_item = 'Add Campaign';
    $labels->edit_item = 'Edit Campaign';
    $labels->new_item = 'Campaign';
    $labels->view_item = 'View Campaign';
    $labels->search_items = 'Search Campaign';
    $labels->not_found = 'No Campaign found';
    $labels->not_found_in_trash = 'No Campaign found in Trash';
    $labels->all_items = 'All Campaigns';
    $labels->menu_name = 'Campaign';
    $labels->name_admin_bar = 'Campaign';
}
add_action('init', 'MTAV_Change_Post_object');
