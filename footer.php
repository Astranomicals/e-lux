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
<?php if (!is_singular('post')) : ?>
	<section class="block block--testimonials">
		<div class="container-fluid">
			<div class="col-12">
				<div class="center-circle">
					<?php get_template_part('components/svg/logo-icon'); ?>
					<h2>What Our Patients Are Saying</h2>
					<a href="#" class="btn btn--primary">Reviews & Testimonials</a>
				</div>
				<div class="background--testimonials">
					<?php
					$args = array(
						'post_type' => 'testimonial',
						'posts_per_page' => 6,
						'order'	=> 'ASC',
						'orderby' => 'rand'
					);
					$query = new WP_Query($args);
					if ($query->have_posts()) :
					?>
						<div class="flex--testimonial testimonial--group-1">
							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>
								<div class="single--testimonial">
									<?php get_template_part('components/svg/stars'); ?>
									<?php echo wp_trastra_words(get_field('testimonial_content'), 18, '...'); ?>
									<p>- <?php echo get_the_title(); ?></p>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php
					$args = array(
						'post_type' => 'testimonial',
						'posts_per_page' => 6,
						'order'	=> 'ASC',
						'orderby' => 'rand'
					);
					$query = new WP_Query($args);
					if ($query->have_posts()) :
					?>
						<div class="flex--testimonial testimonial--group-2">
							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>
								<div class="single--testimonial">
									<?php get_template_part('components/svg/stars'); ?>
									<?php echo wp_trastra_words(get_field('testimonial_content'), 18, '...'); ?>
									<p>- <?php echo get_the_title(); ?></p>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php
					$args = array(
						'post_type' => 'testimonial',
						'posts_per_page' => 6,
						'order'	=> 'ASC',
						'orderby' => 'rand'
					);
					$query = new WP_Query($args);
					if ($query->have_posts()) :
					?>
						<div class="flex--testimonial testimonial--group-3">
							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>
								<div class="single--testimonial">
									<?php get_template_part('components/svg/stars'); ?>
									<?php echo wp_trastra_words(get_field('testimonial_content'), 18, '...'); ?>
									<p>- <?php echo get_the_title(); ?></p>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<section class="block block--consultation">
	<div class="background--image">
		<?php display_image($footer_image, 'full'); ?>
	</div>
	<div class="container">
		<div class="col-xl-8 col-md-8 col-12">
			<h2>Request A Consultation</h2>
			<?php echo do_shortcode('[gravityforms id="1" title="false" description="false" ajax="true"]'); ?>
		</div>
	</div>
	<?php get_template_part('components/svg/footer-curve'); ?>
</section>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-12">
				<?php get_template_part('components/svg/logo'); ?>
			</div>
			<div class="col-xl-4 border-left no-mar"></div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-6">
				<h4>Address</h4>
				<p><?php echo $address; ?><br /><?php echo $address2; ?></p>
				<h4>Phone</h4>
				<p><?php echo $phone; ?></p>
			</div>
			<div class="col-lg-2 col-md-6">
				<h4>Hours</h4>
				<?php echo $hours; ?>
				<div class="spacer"></div>
			</div>
			<div class="col-lg-2 col-md-6">
				<h4>Information</h4>
				<?php
				$args = array(
					'theme_location' => 'footer-menu',
					'container'      => false,
					'menu_class'     => 'menu',
				);
				wp_nav_menu($args);
				?>
			</div>
			<div class="col-lg-2 col-md-6">
				<h4>Resources</h4>
				<?php
				$args = array(
					'theme_location' => 'footer-menu-1',
					'container'      => false,
					'menu_class'     => 'menu',
				);
				wp_nav_menu($args);
				?>
			</div>
			<div class="col-lg-4 border-left">
				<h4>Follow us on social media</h4>
				<?php get_template_part('components/social-icons'); ?>
				<?php echo do_shortcode('[gravityforms id="2" title="false" description="false" ajax="true"]'); ?>
			</div>
		</div>
	</div>
	<div class="container copyright">
		<div class="row">
			<div class="col-12 copyright--flex">
				<div class="left--copyright">
					<p>Copyright &copy; <?php echo esc_attr(gmdate('Y')); ?> <?php echo esc_attr(get_bloginfo()); ?>. All Rights Reserved <a href="/privacy-policy/">Privacy Policy</a></p>
					<p>Digital Marketing by <a href="https://www.astranomicals.com/" target="_blank"><?php get_template_part('components/svg/incredible-marketing'); ?>Incredible Marketing</a></p>
				</div>
				<div class="right--copyright">
					<a href="#" class="js-to-top"><i class="fal fa-long-arrow-up"></i> Back to top</a>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- end of .site-wrap -->

<?php wp_footer(); ?>
<?php echo get_field('footer_scripts', 'options'); ?>
</body>

</html>
