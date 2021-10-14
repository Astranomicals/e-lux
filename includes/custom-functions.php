<?php
/**
 * Custom Functions
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
 * Check if blog page
 */
function im_is_blog() {
	return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag() ) && 'post' === get_post_type();
}

/**
 * Enqueue Slide Assets
 */
function enqueue_slider_assets() {
	wp_enqueue_style( 'swiper' );
	wp_enqueue_script( 'swiper' );
}

/**
 * Change sort order (checking for gallery)
 *
 * @param array $query Query $args that will be changing.
 */
function my_change_sort_order( $query ) {
	if ( is_archive( 'gallery' ) ) :
		$query->set( 'order', 'ASC' );
		$query->set( 'orderby', 'menu_order' );
		$query->set( 'posts_per_page', '-1' );

	endif;
};
add_action( 'pre_get_posts', 'my_change_sort_order' );
