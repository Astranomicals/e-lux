<?php
/**
 * Shortcode for spacer
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
 * Child page shortcode [spacer]
 */
function shortcode_spacer() {
	ob_start();
	get_template_part( 'components/spacer' );
	return ob_get_clean();
}
add_shortcode( 'spacer', 'shortcode_spacer' );
