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
 * Check if blog page
 */
function astra_is_blog()
{
	return (is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' === get_post_type();
}

/**
 * Enqueue Slide Assets
 */
function enqueue_slider_assets()
{
	wp_enqueue_style('swiper');
	wp_enqueue_script('swiper');
}

/**
 * Change sort order (checking for service)
 *
 * @param array $query Query $args that will be changing.
 */
function my_change_sort_order($query)
{
	if (!is_admin() && $query->is_main_query() && is_post_type_archive('service')) :
		$query->set('post_parent', 0);
		$query->set('order', 'ASC');
		$query->set('orderby', 'menu_order');
	endif;
};
add_action('pre_get_posts', 'my_change_sort_order');

/**
 * Change sort order (checking for what we treat)
 *
 * @param array $query Query $args that will be changing.
 */
function my_change_sort_order_treat($query)
{
	if (!is_admin() && $query->is_main_query() && is_post_type_archive('what_we_treat')) :
		$query->set('post_parent', 0);
		$query->set('order', 'ASC');
		$query->set('orderby', 'menu_order');
		$query->set('posts_per_page', -1);

	endif;
};
add_action('pre_get_posts', 'my_change_sort_order_treat');


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
