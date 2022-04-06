<?php

/**
 * Mobile Menu Display
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

if (have_rows('business', 'options')) :
	while (have_rows('business', 'options')) :
		the_row();
		$phone        = get_field('business_phone_display', 'option');
		$phone_url    = get_field('business_phone_url', 'option');
		$address_link = get_field('business_address_link', 'option');
	endwhile;
endif;
?>

<section class="menu__mobile">
	<div class="background--image"></div>
	<button data-toggle="menu">
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
		<div class="contact--info">
			<div class="call">
				<a href="tel:<?php echo esc_attr($phone_url); ?>" class="mobile-phone"><i class="fal fa-phone-alt"></i>
					<p>Call Us</p>
				</a>
			</div>
			<div class="call">
				<a href="/contact/" class="mobile-phone"><i class="fal fa-envelope"></i>
					<p>Email Us</p>
				</a>
			</div>
			<div class="call">
				<a href="<?php echo esc_attr($address_link); ?>" target="_blank" class="mobile-phone"><i class="fal fa-map-marker-alt"></i>
					<p>Directions</p>
				</a>
			</div>
		</div>
	</div>
</section>