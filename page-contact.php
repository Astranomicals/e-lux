<?php

/**
 * Template Name: Contact Page
 * Template Post Type: page
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
$phone_url    = get_field('business_phone_url', 'option');
get_header();  ?>

<section class="block block--contact">
	<div class="container">
		<div class="row flex-row-reverse">
			<div class="col-md-7 offset-md-1">
				<p>Please select what type of quesiton you have, so we can best answer you question as soon as possible.</p>
				<div class="contact--options">
					<div class="active" data-option="1">Sale</div>
					<div data-option="2">Technical</div>
					<div data-option="3">General</div>
				</div>
				<div class="form--area">
					<div class="form active" data-option="1">
						<?php echo do_shortcode('[contact-form-7 id="438" title="Sales Contact Form"]'); ?>
					</div>
					<div class="form" data-option="2">
						<?php echo do_shortcode('[contact-form-7 id="1687" title="Technical Contact Form"]'); ?>
					</div>
					<div class="form" data-option="3">
						<?php echo do_shortcode('[contact-form-7 id="1688" title="General Contact Form"]'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="content">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3319.55431424287!2d-117.9409287!3d33.6946028!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd207037957bb1%3A0xeedbe2081d1ddfcc!2sE-LUX%20Electric%20Bikes!5e0!3m2!1sen!2sus!4v1688961420763!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="info">
					<h4>E-Lux Bikes Showroom / Warehouse</h4>
					<p><a href="<?php echo $address_link; ?>" target="_blank"><?php echo $address; ?><br /><?php echo $address2; ?></a></p>
					<h4>Phone Number</h4>
					<p><a href="tel:+1-<?php echo $phone_url; ?>"><?php echo $phone_url; ?></a></p>
					<h4>Find Us On Our Socials</h4>
					<?php get_template_part('components/social-icons'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
