<?php
/**
 * Team Custom Post Type
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
function MTAV_Team_Custom_Post_type()
{
    $labels = array(
        'name'                => _x('Team', 'Post Type General Name'),
        'singular_name'       => _x('Team', 'Post Type Singular Name'),
        'menu_name'           => __('Our Team'),
        'all_items'           => __('All Team Members'),
        'view_item'           => __('View Team Members'),
        'add_new_item'        => __('Add New Team Member'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Team Member'),
        'update_item'         => __('Update Team Member'),
        'search_items'        => __('Search Team Member'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('Our Team'),
        'description'         => __('Our Team'),
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
    register_post_type('team', $args);
}
add_action('init', 'MTAV_Team_Custom_Post_type', 0);
