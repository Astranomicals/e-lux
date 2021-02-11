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
 * Excerpt_more
 */
function im_excerpt_more() {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'im_excerpt_more' );

/**
 * Add class to next_posts_link.
 */
function im_next_posts_link_attributes() {
	return 'class="ml-auto"';
}
add_filter( 'next_posts_link_attributes', 'im_next_posts_link_attributes' );

/**
 * Add class to next_post_link
 *
 * @param string $output string of the next link.
 */
function im_next_post_link_attributes( $output ) {
	$attr = 'class="ml-auto"';
	return str_replace( '<a href=', '<a ' . $attr . ' href=', $output );
}
add_filter( 'next_post_link', 'im_next_post_link_attributes' );

/**
 * Disable Gutenberg by post type
 *
 * @param bool   $use_block_editor boolean that tells whether or not to use the Gutenberg block editor.
 * @param string $post_type string of the post type you want to disable.
 */
function im_disable_gutenberg( $use_block_editor, $post_type ) {
	$disabled = array(
	// 'page',
	// 'testimonial',
	// 'team_member',
	// 'patient',
	);
	if ( in_array( $post_type, $disabled, true ) ) {
		return false;
	}
	return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'im_disable_gutenberg', 10, 2 );

/**
 * Use <button> for gravity forms submit buttons
 */
add_filter(
	'gform_submit_button',
	function ( $button, $form ) {
		return "<button class='btn btn--primary' id='gform_submit_button_{$form['id']}'><span> " . $form['button']['text'] . '</span></button>';
	},
	10,
	2
);

/**
 * Update Cart Number
 *
 * @param array $fragments Elements to fix the cart amount.
 */
function misha_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	$fragments['.cart-button'] = '<a href="' . wc_get_cart_url() . '" class="text-link cart-button"><i class="fas fa-shopping-cart"></i> Check out (' . $woocommerce->cart->cart_contents_count . ') items</a>';
	return $fragments;

}
add_filter( 'woocommerce_add_to_cart_fragments', 'misha_add_to_cart_fragment' );

/**
 * Update Cross Sells
 *
 * @param array $columns Change # of columns in Cross Sells.
 */
function im_change_cross_sells_columns( $columns ) {
	return 2;
}

add_filter( 'woocommerce_cross_sells_columns', 'im_change_cross_sells_columns' );

/**
 * Update Cross Sells
 *
 * @param array $columns Change # of items in Cross Sells.
 */
function bbloomer_change_cross_sells_product_no( $columns ) {
	return 2;
}
add_filter( 'woocommerce_cross_sells_total', 'bbloomer_change_cross_sells_product_no' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10, 0 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10, 0 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20, 0 );

/**
 * Update Single Product Display
 */
function im_woocommerce_additional_info_and_description() {
	wc_get_template( 'single-product/tabs/additional-information.php' );
	wc_get_template( 'single-product/short-description.php' );
}
add_filter( 'woocommerce_single_product_summary', 'im_woocommerce_additional_info_and_description', 20 );
