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
				<div class="spacer"><img src="/wp-content/uploads/2020/07/diamond-spacer.png" alt="" width="103" height="23" class="aligncenter size-full wp-image-308"></div>
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
			<div class="col-10">
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

<footer class="footer bg-light">
	<?php get_template_part( 'components/social-icons' ); ?>
	<?php if ( $phone_url && $phone ) : ?>
	<p><a href="tel:+1-<?php echo esc_attr( $phone_url ); ?>"><?php echo esc_attr( $phone ); ?></a></p>
	<?php endif; ?>

	<?php if ( $address_link && $address && $address2 ) : ?>
	<p><a href="<?php echo esc_attr( $address_link ); ?>" target="_blank">
			<?php echo esc_attr( $address ); ?><br />
			<?php echo esc_attr( $address2 ); ?></a></p>
	<?php endif; ?>

	<p>&copy; <?php echo esc_attr( gmdate( 'Y' ) ); ?> <?php echo esc_attr( $copyright ) ?: esc_attr( get_bloginfo() ); ?> | <a href="/privacy-policy/">Privacy Policy</a> & <a href="/terms-of-use/">Terms of Use</a> | Digital Marketing By <a href="https://www.incrediblemarketing.com/" target="_blank"><?php get_template_part( 'components/svg/incredible-marketing' ); ?>Incredible Marketing</a></p>
</footer>

</div><!-- end of .site-wrap -->

<?php wp_footer(); ?>
</body>

</html>
