<?php

namespace NineNineProblems;

function post_types() {

	$labels = array(
		'name'           => _x( 'Rebuilds', 'Post Type General Name', DOMAIN ),
		'singular_name'  => _x( 'Rebuild', 'Post Type Singular Name', DOMAIN ),
		'menu_name'      => __( 'Rebuilds', DOMAIN ),
		'name_admin_bar' => __( 'Rebuild', DOMAIN ),
		'new_item_name'  => __( 'New Rebuild', DOMAIN ),
		'add_new_item'   => __( 'Add New Rebuild', DOMAIN ),
	);
	$args   = array(
		'label'               => __( 'Rebuilding', DOMAIN ),
		'description'         => __( 'Notify of a wall rebuild.', DOMAIN ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor' ),
		'taxonomies'          => array( TAX_WALL ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => '99_problems',
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-chart-area',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( CPT_REBUILDING, $args );

	$labels = array(
		'name'          => _x( 'Walls', 'Taxonomy General Name', DOMAIN ),
		'singular_name' => _x( 'Wall', 'Taxonomy Singular Name', DOMAIN ),
		'menu_name'     => __( 'Walls', DOMAIN ),
		'all_items'     => __( 'All walls', DOMAIN ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud'     => true,
	);
	register_taxonomy( TAX_WALL, array( CPT_REBUILDING ), $args );

}

add_action( 'init', __NAMESPACE__ . '\post_types', 0 );

