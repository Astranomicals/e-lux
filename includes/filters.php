<?php

/**
 * Filters
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

/**
 * Display Image using WordPress native sizing
 *
 * @param array  $image array of the image that was selected.
 * @param string $sizes string of the custom size that is needed.
 */
function display_image($image, $sizes)
{
	echo wp_get_attachment_image($image['id'], $sizes, '', array('loading' => 'lazy'));
}

/**
 * Excerpt_more
 */
function astra_excerpt_more()
{
	return '&hellip;';
}
add_filter('excerpt_more', 'astra_excerpt_more');


/**
 * Update Cart Number
 *
 * @param array $fragments Elements to fix the cart amount.
 */
function astra_add_to_cart_fragment($fragments)
{
	global $woocommerce;

	$fragments['.cart-button'] = '<a href="' . wc_get_cart_url() . '" class="text-link cart-button"><i class="fas fa-shopping-cart"></i> Check out (' . $woocommerce->cart->cart_contents_count . ') items</a>';
	return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'astra_add_to_cart_fragment');

/**
 * Deregister wp-embed script
 */
function astra_deregister_scripts()
{
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'astra_deregister_scripts');

/**
 * Remove Guttenburg on front-end
 */
function astra_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style');
}
add_action('wp_enqueue_scripts', 'astra_remove_wp_block_library_css', 100);

/**
 * Remove Recent Comment Style in Source
 */
add_filter('show_recent_comments_widget_style', '__return_false', 99);

/**
 * Move jQuery Files to bottom of page to remove render blocking resources
 */
function astra_move_jquery_to_footer()
{
	wp_scripts()->add_data('jquery', 'group', 1);
	wp_scripts()->add_data('jquery-core', 'group', 1);
	wp_scripts()->add_data('jquery-migrate', 'group', 1);
}
add_action('wp_enqueue_scripts', 'astra_move_jquery_to_footer');

/**
 * Change sort order (checking for product category)
 *
 * @param array $query Query $args that will be changing.
 */
function product_category_unlimited($query)
{
	if (!is_admin() && $query->is_main_query() && is_tax('product_cat')) :
		$query->set('posts_per_page', -1);
	endif;
};
add_action('pre_get_posts', 'product_category_unlimited');


/**
 * Change sort order (checking for products)
 *
 * @param array $query Query $args that will be changing.
 */
function products_unlimited($query)
{
	if (!is_admin() && $query->is_main_query() && is_post_type_archive('product')) :
		$query->set('posts_per_page', -1);
	endif;
};
add_action('pre_get_posts', 'products_unlimited');
