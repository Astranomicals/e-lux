<?php

/**
 * Styles.php
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
 * Register stylesheets
 */
function astra_register_styles()
{
	$theme         = wp_get_theme();
	$theme_version = $theme->get('Version');
	wp_register_style('main', get_template_directory_uri() . '/assets/dist/css/main.min.css', '', $theme_version, 'all');
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), $theme_version);
}
add_action('wp_enqueue_scripts', 'astra_register_styles');

/**
 * Enqueue themes stylesheets
 */
function astra_enqueue_styles()
{
	wp_enqueue_style('main');

	/*
		Remove Comment if you want to enable style.css
		wp_enqueue_style( 'style' );
	*/
}
add_action('wp_enqueue_scripts', 'astra_enqueue_styles');

/* Remove Gutenburg CSS */
function remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style');
	wp_dequeue_style('global-styles');
	wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'remove_wp_block_library_css', 100);
