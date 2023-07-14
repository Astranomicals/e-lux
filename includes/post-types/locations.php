<?php

/**
 * Location Post Type
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

if (!function_exists('astra_register_locations')) {

	/**
	 * Register Location Post Type
	 */
	function astra_register_locations()
	{

		$labels = array(
			'name'                  => _x('Locations', 'Post Type General Name', 'text_domain'),
			'singular_name'         => _x('Location', 'Post Type Singular Name', 'text_domain'),
			'menu_name'             => __('Locations', 'text_domain'),
			'name_admin_bar'        => __('Location', 'text_domain'),
			'archives'              => __('Location Archives', 'text_domain'),
			'attributes'            => __('Location Attributes', 'text_domain'),
			'parent_item_colon'     => __('Parent Location:', 'text_domain'),
			'all_items'             => __('All Locations', 'text_domain'),
			'add_new_item'          => __('Add New Location', 'text_domain'),
			'add_new'               => __('Add New', 'text_domain'),
			'new_item'              => __('New Location', 'text_domain'),
			'edit_item'             => __('Edit Location', 'text_domain'),
			'update_item'           => __('Update Location', 'text_domain'),
			'view_item'             => __('View Location', 'text_domain'),
			'view_items'            => __('View Locations', 'text_domain'),
			'search_items'          => __('Search Location', 'text_domain'),
			'not_found'             => __('Not found', 'text_domain'),
			'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
			'featured_image'        => __('Featured Image', 'text_domain'),
			'set_featured_image'    => __('Set featured image', 'text_domain'),
			'remove_featured_image' => __('Remove featured image', 'text_domain'),
			'use_featured_image'    => __('Use as featured image', 'text_domain'),
			'insert_into_item'      => __('Insert into Location', 'text_domain'),
			'uploaded_to_this_item' => __('Uploaded to this Location', 'text_domain'),
			'items_list'            => __('Locations list', 'text_domain'),
			'items_list_navigation' => __('Locations list navigation', 'text_domain'),
			'filter_items_list'     => __('Filter Locations list', 'text_domain'),
		);
		$args   = array(
			'label'               => __('Location', 'text_domain'),
			'description'         => __('Location Pages', 'text_domain'),
			'labels'              => $labels,
			'supports'            => array('title', 'editor', 'thumbnail', 'page-attributes', 'post-formats'),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-location',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
			'rewrite'             => array('slug' => 'results', 'with_front' => false),
		);
		register_post_type('location', $args);
	}
	add_action('init', 'astra_register_locations', 0);
}
/**
 * Custom taxonomies
 */
if (!function_exists('register_location_taxonomies')) {

	function register_location_taxonomies()
	{


		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'                => _x('State', 'taxonomy general name'),
			'singular_name'       => _x('State', 'taxonomy singular name'),
			'search_items'        => __('Search States'),
			'all_items'           => __('All States'),
			'parent_item'         => __('Parent State'),
			'parent_item_colon'   => __('Parent State:'),
			'edit_item'           => __('Edit State'),
			'update_item'         => __('Update State'),
			'add_new_item'        => __('Add New State'),
			'new_item_name'       => __('New State Name'),
			'menu_name'           => __('States')
		);

		$args = array(
			'hierarchical'        => true,
			'labels'              => $labels,
			'show_ui'             => true,
			'show_in_nav_menus'   => false,
			'show_admin_column'   => true,
			'query_var'           => true,
			'rewrite'             => array('slug' => 'state')
		);

		register_taxonomy('state', array('location'), $args); // Must include custom post type name

	}

	add_action('init', 'register_location_taxonomies', 0);
}
