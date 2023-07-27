<?php

/**
 * Footer
 *
 * Main footer file for the theme.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$address      = get_field('business_street_address', 'option');
$address2     = get_field('business_city_state_zip', 'option');
$address_link = get_field('business_address_link', 'option');
$phone        = get_field('business_phone_display', 'option');
$phone_url    = get_field('business_phone_url', 'option');
$hours    		= get_field('business_hours', 'option');
$footer_image    = get_field('footer_image', 'option');

?>
<?php if (!is_front_page() && !is_page(384)) : ?>
	<section class="block block--concierge-button">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Not sure? Allow Our E-bike Concierge Help You Find the Perfect Model</h2>
					<a href="/concierge/" class="btn btn--tertiary">Take the Concierge Quiz</a>
				</div>
			</div>
		</div>
	</section>
<?php elseif (is_page(384)) : ?>
	<section class="block block--concierge-button">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Found Your Perfect Model?</h2>
					<a href="/product-category/models/" class="btn btn--tertiary">View All Models</a>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-6">
				<h4>Information</h4>
				<?php
				$args = array(
					'theme_location' => 'info-menu',
					'container'      => false,
					'menu_class'     => 'menu',
				);
				wp_nav_menu($args);
				?>
			</div>
			<div class="col-lg-2 col-md-4 col-6">
				<h4>Help</h4>
				<?php
				$args = array(
					'theme_location' => 'help-menu',
					'container'      => false,
					'menu_class'     => 'menu',
				);
				wp_nav_menu($args);
				?>
			</div>
			<div class="col-lg-2 col-md-4 col-12 hide-sm">
				<h4>E-Bikes</h4>
				<?php
				$args = array(
					'theme_location' => 'bike-menu',
					'container'      => false,
					'menu_class'     => 'menu',
				);
				wp_nav_menu($args);
				?>
			</div>
			<div class="col-lg-6 border-left">
				<h4>Stay Connected</h4>
				<?php echo do_shortcode('[contact-form-7 id="439" title="Sign Up"]'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php get_template_part('components/svg/logo'); ?>
				<hr>
				<div class="copyright">
					<p>Copyright &copy; <?php echo esc_attr(gmdate('Y')); ?> <?php echo esc_attr(get_bloginfo()); ?>. Disclaimer: All pictures shown are for illustration purpose only. Actual product may vary due to product enhancement | Digital Marketing by <a href="https://www.astranomicals.com/" target="_blank">Astranomicals</a></p>
					<?php get_template_part('components/social-icons'); ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="daytime-toggle">
	<input type="checkbox" id="toggle" class="toggle--checkbox">
	<label for="toggle" class="toggle--label">
		<span class="toggle--label-background"></span>
	</label>
	<div class="background"></div>
	<div class="text">
		<span class="night">See E-lux in the Day</span>
		<span class="day">See E-lux at Night</span>
	</div>
</div>
</div><!-- end of .site-wrap -->

<?php wp_footer(); ?>
</body>

</html>
