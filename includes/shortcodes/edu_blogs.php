<?php

/**
 * Shortcode for education blogs
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
 * Shortcode to display the last 8 education blogs
 */
function shortcode_edu_blogs()
{
	$output = '<ul>';

	$args = array(
		'post_type' => 'post',
		'cat' => 126,
		'posts_per_page' => 8
	);

	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) :
		while ($the_query->have_posts()) :
			$the_query->the_post();
			$output .= '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
		endwhile;
		wp_reset_postdata();
	endif;
	$output .= '</ul>';
	return $output;
}
add_shortcode('edu_blogs', 'shortcode_edu_blogs');
