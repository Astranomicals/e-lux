<?php

/**
 * Theme Support
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

add_theme_support('post-thumbnails');

/* Add Woocommerce Support */
add_theme_support('woocommerce');
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

/* Remove Emoji Scripts */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/* Remove Woocommerce Elements */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10, 0);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20, 0);
