<?php

/**
 * Blog Sidebar
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
 * Register Blog Sidebar
 */
function astra_register_sidebar_blog()
{
	register_sidebar(
		array(
			'name'          => 'Sidebar Blog',
			'id'            => 'sidebar_blog',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init', 'astra_register_sidebar_blog');
