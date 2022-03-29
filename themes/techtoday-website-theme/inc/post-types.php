<?php
/**
 * Custom post types for this theme
 *
 * @package TechToday
 */
function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Events', 'Post type general name', 'TechToday' ),
        'singular_name'         => _x( 'Event', 'Post type singular name', 'TechToday' ),
        'menu_name'             => _x( 'Events', 'Admin Menu text', 'TechToday' ),
        'name_admin_bar'        => _x( 'Event', 'Add New on Toolbar', 'TechToday' ),
        'add_new'               => __( 'Add New', 'TechToday' ),
        'add_new_item'          => __( 'Add New Event', 'TechToday' ),
        'new_item'              => __( 'New Event', 'TechToday' ),
        'edit_item'             => __( 'Edit Event', 'TechToday' ),
        'view_item'             => __( 'View Event', 'TechToday' ),
        'all_items'             => __( 'All Events', 'TechToday' ),
        'search_items'          => __( 'Search Events', 'TechToday' ),
        'parent_item_colon'     => __( 'Parent Events:', 'TechToday' ),
        'not_found'             => __( 'No Events found.', 'TechToday' ),
        'not_found_in_trash'    => __( 'No Events found in Trash.', 'TechToday' ),
        'featured_image'        => _x( 'Event Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'TechToday' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'TechToday' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'TechToday' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'TechToday' ),
        'archives'              => _x( 'Event archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'TechToday' ),
        'insert_into_item'      => _x( 'Insert into Event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'TechToday' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'TechToday' ),
        'filter_items_list'     => _x( 'Filter Events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'TechToday' ),
        'items_list_navigation' => _x( 'Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'TechToday' ),
        'items_list'            => _x( 'Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'TechToday' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Event custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'TechToday_Event', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );