<?php
/**
 * Single Procedure
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$address      = get_field( 'business_street_address', 'option' );
$address2     = get_field( 'business_city_state_zip', 'option' );
$address_link = get_field( 'business_address_link', 'option' );
$phone        = get_field( 'business_phone_display', 'option' );
$phone_url    = get_field( 'business_phone_url', 'option' );
get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<section class="block block--contact-header">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="image--holder">
							<?php echo get_the_post_thumbnail( $post->ID, 'featured_hero_thumb' ); ?>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="white--box">
							<h1>Contact</h1>
							<h2>Edina Plastic Surgery</h2>
							<div class="white--box-bottom">
								<p>Edina Plastic Surgery, Ltd.<br>
									<?php echo esc_attr( $address ); ?><br />
									<?php echo esc_attr( $address2 ); ?></p>

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
						</div>
					</div>
				</div>
				<div class="row block--form-area">
					<div class="col-xl-4 offset-xl-1">
						<?php the_content(); ?>
					</div>
					<div class="col-xl-6 offset-xl-1">
						<?php echo do_shortcode( '[gravityforms id="3" title="false" description="false" ajax="true"]' ); ?>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?> 
<?php endif; ?>  

<?php
get_footer();
