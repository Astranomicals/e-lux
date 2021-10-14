<?php
/**
 * Styles.php
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
 * Register stylesheets
 */
function im_register_styles() {
	$theme         = wp_get_theme();
	$theme_version = $theme->get( 'Version' );
	wp_register_style( 'main', get_template_directory_uri() . '/assets/dist/css/main.min.css', '', $theme_version, 'all' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'im_register_styles' );

/**
 * Enqueue themes stylesheets
 */
function im_enqueue_styles() {
	wp_enqueue_style( 'main' );

	/*
		Remove Comment if you want to enable style.css
		wp_enqueue_style( 'style' );
	*/
}
add_action( 'wp_enqueue_scripts', 'im_enqueue_styles' );
