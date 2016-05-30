<?php
/*
 * Plugin Name: ABC Videos
 * Plugin URI: https://github.com/ambassador-baptist-college/abc-videos/
 * Description: Video Archives
 * Version: 1.0.0
 * Author: AndrewRMinion Design
 * Author URI: https://andrewrminion.com
 * GitHub Plugin URI: https://github.com/ambassador-baptist-college/abc-videos/
 */

if (!defined('ABSPATH')) {
    exit;
}

// Register Custom Post Type
function video_post_type() {

    $labels = array(
        'name'                  => 'Videos',
        'singular_name'         => 'Video',
        'menu_name'             => 'Videos',
        'name_admin_bar'        => 'Video',
        'archives'              => 'Video Archives',
        'parent_item_colon'     => 'Parent Video:',
        'all_items'             => 'All Videos',
        'add_new_item'          => 'Add New Video',
        'add_new'               => 'Add New',
        'new_item'              => 'New Video',
        'edit_item'             => 'Edit Video',
        'update_item'           => 'Update Video',
        'view_item'             => 'View Video',
        'search_items'          => 'Search Video',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into video',
        'uploaded_to_this_item' => 'Uploaded to this video',
        'items_list'            => 'Videos list',
        'items_list_navigation' => 'Videos list navigation',
        'filter_items_list'     => 'Filter videos list',
    );
    $rewrite = array(
        'slug'                  => 'resources/video',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => 'Video',
        'description'           => 'Videos',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-media-video',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'resources/video-archive',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'video', $args );

}
add_action( 'init', 'video_post_type', 0 );
