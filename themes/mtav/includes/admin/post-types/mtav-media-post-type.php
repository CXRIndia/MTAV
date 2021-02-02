<?php
/**
 * MTAV Media Custom Post Type
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

/**
 * Used to create custom post type
 *
 * @return $labels for post type
 */
function MTAV_Media_Custom_Post_type()
{
    $labels = array(
        'name'                => _x('MTAV Media', 'Post Type General Name'),
        'singular_name'       => _x('MTAV Media', 'Post Type Singular Name'),
        'menu_name'           => __('MTAV Media'),
        'all_items'           => __('All MTAV Media'),
        'view_item'           => __('View MTAV Media'),
        'add_new_item'        => __('Add New MTAV Media'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit MTAV Media'),
        'update_item'         => __('Update MTAV Media'),
        'search_items'        => __('Search MTAV Media'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('MTAV Media'),
        'description'         => __('MTAV Media'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'            => false,
    );

    // Registering your Custom Post Type
    register_post_type('mtav-media', $args);
}
add_action('init', 'MTAV_Media_Custom_Post_type', 0);
