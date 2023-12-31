<?php

/**
 * Display Call Number
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$business_phone_display = get_field('business_phone_display', 'options');
$business_phone_url     = get_field('business_phone_url', 'options');

?>

<?php if ($business_phone_display && $business_phone_url) : ?>
	<a class="btn--call" href="tel:<?php echo esc_attr($business_phone_url); ?>">
		<i class="fal fa-phone"></i> <span><?php echo esc_attr($business_phone_display); ?></span>
	</a>
<?php endif; ?>
