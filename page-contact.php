<?php

/**
 * Template Name: Contact Page
 * Template Post Type: page
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
$hours    		= get_field('business_hours', 'option');
get_header();  ?>

<section class="block block--top-header">
	<div class="side--image">
		<?php echo get_the_post_thumbnail($post->ID, 'top_header_thumb'); ?>
	</div>
	<div class="container">
		<div class="col-md-6">
			<?php echo do_shortcode('[gravityforms id="3" title="false" description="false" ajax="true"]'); ?>
		</div>
	</div>
</section>

<section class="block block--content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content--info">
					<div class="content">
						<?php the_content(); ?>
					</div>
					<div class="info">
						<h4>Phone Number</h4>
						<p><a href="tel:<?php echo $phone_url; ?>"><?php echo $phone; ?></a></p>
						<h4>Directions</h4>
						<p><a href="<?php echo $address_link; ?>" target="_blank"><?php echo $address; ?><br /><?php echo $address2; ?></a></p>
						<h4>Hours</h4>
						<?php echo $hours; ?>
						<?php get_template_part('components/social'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
