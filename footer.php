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

	$copyright    = get_field( 'copyright', 'option' );
	$address      = get_field( 'business_street_address', 'option' );
	$address2     = get_field( 'business_city_state_zip', 'option' );
	$address_link = get_field( 'business_address_link', 'option' );
	$phone        = get_field( 'business_phone_display', 'option' );
	$phone_url    = get_field( 'business_phone_url', 'option' );
?>

<?php if ( is_front_page() ) : ?>
<section class="block block__testimonial">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h5>Testimonials</h5>
				<h2>Words From Our Clients</h2>
				<?php get_template_part( 'components/spacer' ); ?>
				<?php
					$args       = array(
						'post_type'      => 'testimonial',
						'posts_per_page' => 6,
					);
					$test_query = new WP_Query( $args );

					if ( $test_query->have_posts() ) :
						?>
						<div class="swiper-container testimonial-container">
							<div class="swiper-wrapper">
							<?php while ( $test_query->have_posts() ) : ?>
								<?php $test_query->the_post(); ?>
								<div class="swiper-slide">
									<?php the_content(); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="swiper-pagination"></div>
						<?php get_template_part( 'components/swiper-nav' ); ?>
						</div>
						<?php
					endif;
					?>
			</div>
		</div>
		<div class="row justify-content-center newsletter--area">
			<div class="col-md-10 col-12">
					<div class="newsletter--box">
						<h3>Join the EPS Community</h3>
						<div class="content--area">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Turpis eu tellus sit mauris. Sagittis, morbi libero, posuere gravida purus fames risus. Praesent lacus fames donec mi ornare cum iaculis praesent.</p>
							<?php echo do_shortcode( '[gravityforms id="1" title="false" description="false" ajax="true"]' ); ?>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if ( ! is_page( 23 ) ) : ?>
	<section class="block block__schedule">
		<div class="image--holder">
			<?php $schedule_image = get_field( 'schedule_image', 'options' ); ?>
			<img src="<?php echo $schedule_image['sizes']['hero_thumb']; ?>" />
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-md-6 col-12">
					<h3><strong class="fancy">Schedule</strong> A Consultation</h3>
				</div>
				<div class="col-xl-7"></div>
			</div>
			<div class="row">
				<div class="col-xl-5 offset-xl-1 col-md-6">
					<?php echo do_shortcode( '[gravityforms id="2" title="false" description="false" ajax="true"]' ); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<footer class="block block--map">
	<div class="image--holder">
		<?php $footer_image = get_field( 'footer_image', 'options' ); ?>
		<img src="<?php echo $footer_image['sizes']['hero_thumb']; ?>" />
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="contact--info">
					<div class="contact--left">
						<h4>Contact Us</h4>
						<div class="contact--left-bottom">
							<div class="phone--area">
								<h5>Phone Number</h5>
								<?php if ( $phone_url && $phone ) : ?>
									<p><a href="tel:<?php echo esc_attr( $phone_url ); ?>"><?php echo esc_attr( $phone ); ?></a></p>
								<?php endif; ?>
							</div>
							<div class="text--area">
								<h5>Text EPS</h5>
								<p><a href="sms:<?php echo get_field( 'business_text', 'options' ); ?>"><?php echo get_field( 'business_text', 'options' ); ?></a></p>
							</div>
						</div>
					</div>
					<div class="contact--right">
						<?php if ( $address_link && $address && $address2 ) : ?>
							<p><i class="fas fa-map-marker-alt"></i> 
								<?php echo esc_attr( $address ); ?><br />
								<?php echo esc_attr( $address2 ); ?></p>
							<p class="directions"><a href="<?php echo esc_attr( $address_link ); ?>" target="_blank">Get Directions <span class="line"></span></a></p>
						<?php endif; ?>
						<?php get_template_part( 'components/social-icons' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container copyright">
		<div class="row">
			<div class="col-12 copyright--flex">
				<p>Copyright &copy; <?php echo esc_attr( gmdate( 'Y' ) ); ?> <?php echo esc_attr( $copyright ) ?: esc_attr( get_bloginfo() ); ?>. All Rights Reserved | <a href="/privacy-policy/">Privacy Policy</a> | <a href="/terms-of-use/">Terms of Service</a> | <a href="/sitemap/">Sitemap</a></p> 
				<p>Designed By <a href="https://www.incrediblemarketing.com/" target="_blank"><?php get_template_part( 'components/svg/incredible-marketing' ); ?>Incredible Marketing</a></p>
			</div>
		</div>
	</div>
</footer>

</div><!-- end of .site-wrap -->

<?php wp_footer(); ?>
</body>
<script async type="application/javascript" id="zwivelWidgetSnippet" src="https://doctor.zwivel.com/group-widget/edina-plastic-surgery"></script>
</html>
