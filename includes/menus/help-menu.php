<?php

/**
 * Help Menu
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
 * Register Help Menu
 */
function astra_register_help_menu()
{
	register_nav_menus(
		array(
			'help-menu' => __('Help Menu'),
		)
	);
}
add_action('init', 'astra_register_help_menu');
