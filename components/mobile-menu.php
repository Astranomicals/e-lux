<?php

/**
 * Mobile Menu Display
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$contact_link = get_field('contact_link', 'option');
$address_link = get_field('business_address_link', 'option');
$phone        = get_field('business_phone_display', 'option');
$phone_url    = get_field('business_phone_url', 'option');
?>

<section class="menu__mobile">
	<div class="menu--background"></div>
	<?php get_template_part('components/svg/logo'); ?>
	<button data-toggle="menu" aria-label="Menu Close">
		<span></span>
		<span></span>
	</button>
	<div class="primary--menu">
		<?php
		$args = array(
			'theme_location' => 'header-menu',
			'container'      => false,
			'menu_class'     => 'menu',
		);
		wp_nav_menu($args);
		?>
	</div>
</section>
