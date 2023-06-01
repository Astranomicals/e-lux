<?php

/**
 * Footer
 *
 * Main footer file for the theme.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$address      = get_field('business_street_address', 'option');
$address2     = get_field('business_city_state_zip', 'option');
$address_link = get_field('business_address_link', 'option');
$phone        = get_field('business_phone_display', 'option');
$phone_url    = get_field('business_phone_url', 'option');
$footer_image    = get_field('footer_image', 'option');

?>
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
								<?php the_content(); ?>
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
								<p><?php the_content(); ?></p>
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
								<p><?php the_content(); ?></p>
								<p>- <?php echo get_the_title(); ?></p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="block block--consultation">
	<div class="background--image">
		<?php display_image($footer_image, 'full'); ?>
	</div>
	<div class="container">
		<div class="col-xl-8 col-md-10 col-12">
			<h2>Request A Consultation</h2>
			<?php echo do_shortcode('[gravityforms id="1" title="false" description="false" ajax="true"]'); ?>
		</div>
	</div>
	<?php get_template_part('components/svg/footer-curve'); ?>
</section>
<footer id="footer">
	<div class="container copyright">
		<div class="row">
			<div class="col-12 copyright--flex">
				<p>Copyright &copy; <?php echo esc_attr(gmdate('Y')); ?> <?php echo esc_attr(get_bloginfo()); ?>. All Rights Reserved | <a href="/privacy-policy/">Privacy Policy</a> | <a href="/terms-of-use/">Terms of Service</a></p>
				<p>Designed By <a href="https://www.incrediblemarketing.com/" target="_blank"><?php get_template_part('components/svg/incredible-marketing'); ?>Incredible Marketing</a></p>
			</div>
		</div>
	</div>
</footer>

</div><!-- end of .site-wrap -->

<?php wp_footer(); ?>
<?php echo get_field('footer_scripts', 'options'); ?>
</body>

</html>
