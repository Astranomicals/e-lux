<?php

/**
 * Custom Functions
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
 * Enqueue Slide Assets
 */
function enqueue_slider_assets()
{
	wp_enqueue_style('swiper');
	wp_enqueue_script('swiper');
}


/* Custom number pagination */

function astra_numeric_posts_nav()
{
	if (is_singular()) {
		return;
	}

	global $wp_query;

	/**
	 * Stop execution if there's only 1 page
	 */
	if ($wp_query->max_num_pages <= 1) {
		return;
	}

	$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
	$max   = intval($wp_query->max_num_pages);

	/**
	 * Add current page to the array
	 */
	if ($paged >= 1) {
		$links[] = $paged;
	}

	/**
	 * Add the pages around the current page to the array
	 */
	if ($paged >= 3) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if (($paged + 2) <= $max) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="blog-pagination">';

	echo '<p>Page ' . $paged . ' of ' . $max . '</p>';

	/**
	 * Link to first page, plus ellipses if necessary
	 */
	if (!in_array(1, $links)) {
		$class = 1 == $paged ? ' class="pagination-bullet pagination-bullet-active"' : '';

		printf('<span%s class="pagination-bullet"><a href="%s"><span>%s</span></a></span>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
		printf('<span>...</span>');
	}

	/**
	 * Link to current page, plus 2 pages in either direction if necessary
	 */
	sort($links);
	foreach ((array) $links as $link) {
		$class = $paged == $link ? ' class="pagination-bullet pagination-bullet-active"' : '';
		printf('<span%s class="pagination-bullet"><a href="%s"><span>%s</span></a></span>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
	}

	/**
	 * Link to last page, plus ellipses if necessary
	 */
	if (!in_array($max, $links)) {
		printf('<span>...</span>');
		$class = $paged == $max ? ' class="pagination-bullet pagination-bullet-active"' : '';
		printf('<span%s class="pagination-bullet"><a href="%s"><span>%s</span></a></span>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
	}

	echo '</div>';
}

function custom_excerpt_length($length)
{
	return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
