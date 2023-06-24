<?php

/**
 * Scripts.php
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
 * Register javascript files
 */
function astra_register_scripts()
{
	$theme         = wp_get_theme();
	$theme_version = $theme->get('Version');

	wp_register_script('plugins', get_template_directory_uri() . '/assets/dist/js/plugins.min.js', '', $theme_version, true);
	wp_register_script('main', get_template_directory_uri() . '/assets/dist/js/main.min.js', '', $theme_version, true);
}
add_action('wp_enqueue_scripts', 'astra_register_scripts');

/**
 * Enqueue javascript files
 */
function astra_enqueue_scripts()
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('plugins');
	wp_enqueue_script('main');

	/*
	Create AJAX variable (Remove if you do not need AJAX).
	wp_localize_script(
		'main',
		'im',
		array(
			'siteUrl'      => site_url(),
			'directoryUrl' => get_template_directory_uri(),
			'ajax_url'     => admin_url( 'admin-ajax.php' ),
		)
	);
	*/
}
add_action('wp_enqueue_scripts', 'astra_enqueue_scripts');
