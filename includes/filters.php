<?php

/**
 * Filters
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
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
function im_excerpt_more()
{
	return '&hellip;';
}
add_filter('excerpt_more', 'im_excerpt_more');

/**
 * Add class to next_posts_link.
 */
function im_next_posts_link_attributes()
{
	return 'class="ml-auto"';
}
add_filter('next_posts_link_attributes', 'im_next_posts_link_attributes');

/**
 * Add class to next_post_link
 *
 * @param string $output string of the next link.
 */
function im_next_post_link_attributes($output)
{
	$attr = 'class="ml-auto"';
	return str_replace('<a href=', '<a ' . $attr . ' href=', $output);
}
add_filter('next_post_link', 'im_next_post_link_attributes');

/**
 * Disable Gutenberg by post type
 *
 * @param bool   $use_block_editor boolean that tells whether or not to use the Gutenberg block editor.
 * @param string $post_type string of the post type you want to disable.
 */
function im_disable_gutenberg($use_block_editor, $post_type)
{
	$disabled = array(
		// 'page',
		// 'testimonial',
		// 'team_member',
		// 'patient',
	);
	if (in_array($post_type, $disabled, true)) {
		return false;
	}
	return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'im_disable_gutenberg', 10, 2);

/**
 * Use <button> for gravity forms submit buttons
 */
add_filter(
	'gform_submit_button_2',
	function ($button, $form) {
		return "<button aria-label='Submit Form' class='btn btn--secondary' id='gform_submit_button_{$form['id']}'><i class='far fa-long-arrow-right'></i></button>";
	},
	10,
	2
);
add_filter(
	'gform_submit_button',
	function ($button, $form) {
		return "<button aria-label='Submit Form' class='btn btn--primary' id='gform_submit_button_{$form['id']}'><span> " . $form['button']['text'] . '</span></button>';
	},
	10,
	2
);

/**
 * Update Cart Number
 *
 * @param array $fragments Elements to fix the cart amount.
 */
function im_add_to_cart_fragment($fragments)
{
	global $woocommerce;

	$fragments['.cart-button'] = '<a href="' . wc_get_cart_url() . '" class="text-link cart-button"><i class="fas fa-shopping-cart"></i> Check out (' . $woocommerce->cart->cart_contents_count . ') items</a>';
	return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'im_add_to_cart_fragment');

/**
 * Update Cross Sells Columns to 2
 */
function im_change_cross_sells_columns()
{
	return 2;
}

add_filter('woocommerce_cross_sells_columns', 'im_change_cross_sells_columns');

/**
 * Update Cross Sells Product Rows to 2
 */
function im_change_cross_sells_product_no()
{
	return 2;
}
add_filter('woocommerce_cross_sells_total', 'im_change_cross_sells_product_no');

/**
 * Update Single Product Display
 */
function im_woocommerce_additional_info_and_description()
{
	wc_get_template('single-product/tabs/additional-information.php');
	wc_get_template('single-product/short-description.php');
}
add_filter('woocommerce_single_product_summary', 'im_woocommerce_additional_info_and_description', 20);

/**
 * Deregister wp-embed script
 */
function im_deregister_scripts()
{
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'im_deregister_scripts');

/**
 * Remove Guttenburg on front-end
 */
function im_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style');
}
add_action('wp_enqueue_scripts', 'im_remove_wp_block_library_css', 100);

/**
 * Remove Recent Comment Style in Source
 */
add_filter('show_recent_comments_widget_style', '__return_false', 99);

/**
 * Move jQuery Files to bottom of page to remove render blocking resources
 */
function im_move_jquery_to_footer()
{
	wp_scripts()->add_data('jquery', 'group', 1);
	wp_scripts()->add_data('jquery-core', 'group', 1);
	wp_scripts()->add_data('jquery-migrate', 'group', 1);
}
add_action('wp_enqueue_scripts', 'im_move_jquery_to_footer');
