<?php
/**
 * Shortcode to display team members
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
 * Staff member shortcode [team_member]
 */
function shortcode_team() {
	global $post;

	$custom_terms = get_terms( 'position' );
	$i            = 0;
	foreach ( $custom_terms as $custom_term ) {
		wp_reset_query();
		$args = array(
			'post_type'      => 'staff',
			'orderby'        => 'menu_order',
			'order'          => 'ASC',
			'posts_per_page' => -1,
			'tax_query'      => array(
				array(
					'taxonomy' => 'position',
					'field'    => 'slug',
					'terms'    => $custom_term->slug,
				),
			),
		);

		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			$term     = $custom_term->name;
			$custterm = preg_replace( '/\s*/', '', $term );
			$custterm = strtolower( $custterm );

			$content .= '<h2>' . $term . '</h2>';
			$content .= '<div class="staff--flex">';
			while ( $loop->have_posts() ) {
				$loop->the_post();
				$content             .= '<div class="staff">';
						$content     .= '<a href="' . get_the_permalink() . '">';
						$content     .= '<div class="image--holder">';
							$content .= get_the_post_thumbnail( $post->ID, 'large' );
							$content .= '<p>View Profile</p>';
						$content     .= '</div>';
						$content     .= '<h3>' . get_the_title() . '</h3>';
						$content     .= '<h5>' . get_field( 'team_position' ) . '</h5>';
						$content     .= '</a>';
				$content             .= '</div>';
			}
			$content .= '</div>';
			$content .= '<div class="spacer"><img src="/wp-content/uploads/2020/07/diamond-spacer.png" alt="" width="103" height="23" class="aligncenter size-full wp-image-308"></div>';
		}
	}

	return $content;
}
add_shortcode( 'team_members', 'shortcode_team' );
