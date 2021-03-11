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

/**
 * Change Gallery Info though AJAX
 */
function get_gallery_info() {
	global $wpdb;
	global $gallerycount;
	$gallerycount = 0;

	$taxid    = $_GET['taxid'];
	$doctorid = $_GET['doctorid'];

	if ( 0 === $taxid ) {
		$terms = get_terms( 'related_procedure' );
		$taxid = wp_list_pluck( $terms, 'term_id' );
	}
	if ( 0 === $doctorid ) {
		$terms_2  = get_terms( 'related_doctor' );
		$doctorid = wp_list_pluck( $terms_2, 'term_id' );
	}

	$args = array(
		'post_type'      => 'gallery',
		'tax_query'      => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'related_doctor',
				'field'    => 'term_id',
				'terms'    => $doctorid,
			),
			array(
				'taxonomy' => 'related_procedure',
				'field'    => 'term_id',
				'terms'    => $taxid,
			),
		),
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
		'posts_per_page' => -1,
	);

	$patients = new WP_Query( $args );

	ob_start();
	while ( $patients->have_posts() ) :
		$patients->the_post();
		get_template_part( 'components/gallery-preview' );
	endwhile;

	echo ob_get_clean();

	wp_die();
}
add_action( 'wp_ajax_get_gallery_info', 'get_gallery_info' );
add_action( 'wp_ajax_nopriv_get_gallery_info', 'get_gallery_info' );
