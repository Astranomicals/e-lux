<?php
/**
 * Shortcode to display staff members
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
 * Staff member shortcode [staff]
 */
function shortcode_staff() {
	global $post;

	$args = array(
		'post_type'      => 'team_member',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
	);

	$staff   = new WP_Query( $args );
	$content = '';
	if ( $staff->have_posts() ) :
		$content .= '<div class="staff--flex surgeons--flex">';
		while ( $staff->have_posts() ) :
			$staff->the_post();
			$content                 .= '<div class="staff">';
						$content     .= '<a href="' . get_the_permalink() . '">';
						$content     .= '<div class="image--holder">';
							$content .= get_the_post_thumbnail( $post->ID, 'large' );
							$content .= '<p>View Profile</p>';
						$content     .= '</div>';
						$content     .= '<h3>' . get_the_title() . '</h3>';
						$content     .= '<h5>' . get_field( 'team_position' ) . '</h5>';
						$content     .= '</a>';
				$content             .= '</div>';
			endwhile;
		wp_reset_postdata();
		$content .= '</div>';
		endif;

	return $content;
}
add_shortcode( 'staff', 'shortcode_staff' );
