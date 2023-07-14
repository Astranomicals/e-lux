<?php

/**
 * Shortcode to display locations
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
 * Location shortcode [locations]
 */
function shortcode_locations()
{

	$terms = get_terms(array('state'));
	$output = '<div class="locations--area">';
	foreach ($terms as $term) :

		$term_slug = $term->slug;

		$the_query = new WP_Query(array(
			'post_type'         => 'location',
			'posts_per_page'    => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'state',
					'field'    => 'slug',
					'terms'    => $term_slug,
				),
			),
		));

		$output .= '<h2>' . $term->name . '</h2>';
		$output .= '<div class="location--flex">';
		if ($the_query->have_posts()) :
			while ($the_query->have_posts()) :
				$the_query->the_post();
				$output .= '<div class="location--block">';
				if (has_post_thumbnail()) :
					$output .= '<div class="image--inner">';
					$output .= get_the_post_thumbnail($the_query->ID, 'full');
					$output .= '</div>';
				endif;
				$output .= '<div class="content--inner">';
				$output .= '<h4>' . get_the_title() . '</h4>';
				$output .= get_the_content();
				$output .= '</div>';
				$output .= '</div>';
			endwhile;
		endif;
		$output .= '</div>';
		wp_reset_postdata();

	endforeach;
	$output .= '</div>';

	return $output;
}
add_shortcode('locations', 'shortcode_locations');
