<?php
// Plugin Name: DKUK Podcasts
// Version: 1.0
// Author: Jacob Charles Wilson
// Author URI: https://jacobcharleswilson.com
// Adds Podcast Custom Post Type
// https://generatewp.com/post-type/

function dkuk_podcast_cpt() {

	$podcast_labels = array(
		'name'                  => _x( 'Podcasts', 'Post Type General Name', 'dkuk' ),
		'singular_name'         => _x( 'Podcast', 'Post Type Singular Name', 'dkuk' ),
		'menu_name'             => __( 'Podcasts', 'dkuk' ),
		'name_admin_bar'        => __( 'Podcast', 'dkuk' ),
		'archives'              => __( 'Podcast Archive', 'dkuk' ),
		'attributes'            => __( 'Podcast Attributes', 'dkuk' ),
		'parent_item_colon'     => __( 'Parent Podcast:', 'dkuk' ),
		'all_items'             => __( 'All Podcasts', 'dkuk' ),
		'add_new_item'          => __( 'Add New Podcast', 'dkuk' ),
		'add_new'               => __( 'Add New', 'dkuk' ),
		'new_item'              => __( 'New Podcast', 'dkuk' ),
		'edit_item'             => __( 'Edit Podcast', 'dkuk' ),
		'update_item'           => __( 'Update Podcast', 'dkuk' ),
		'view_item'             => __( 'View Podcast', 'dkuk' ),
		'view_items'            => __( 'View Podcasts', 'dkuk' ),
		'search_items'          => __( 'Search Podcasts', 'dkuk' ),
		'not_found'             => __( 'Not found', 'dkuk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'dkuk' ),
		'featured_image'        => __( 'Featured Image', 'dkuk' ),
		'set_featured_image'    => __( 'Set featured image', 'dkuk' ),
		'remove_featured_image' => __( 'Remove featured image', 'dkuk' ),
		'use_featured_image'    => __( 'Use as featured image', 'dkuk' ),
		'insert_into_item'      => __( 'Insert into podcast', 'dkuk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this podcast', 'dkuk' ),
		'items_list'            => __( 'Podcasts list', 'dkuk' ),
		'items_list_navigation' => __( 'Podcasts list navigation', 'dkuk' ),
		'filter_items_list'     => __( 'Filter podcasts list', 'dkuk' ),
	);
	$podcast_args = array(
		'label'                 => __( 'Podcast', 'dkuk' ),
		'description'           => __( 'Used for podcasts made by DKUK', 'dkuk' ),
		'labels'                => $podcast_labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-microphone',
		'rewrite'            => array( 'slug' => 'podcasts' ),
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'Podcast', $podcast_args );

}
add_action( 'init', 'dkuk_podcast_cpt', 0 );

?>
