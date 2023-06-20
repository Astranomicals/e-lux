<?php

/**
 * Displays Hero Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$contact_link = get_field('contact_link', 'options');
$heading       = get_sub_field('heading');
$subheading              = get_sub_field('subheading');
$video_mp4    = get_sub_field('background_video_mp4');
$video_webm   = get_sub_field('background_video_webm');
$hero_image = get_sub_field('background_video_poster');
?>
<?php if ($video_mp4 || $video_webm) : ?>
	<div class="background--image">
		<video fechpriority="high" poster="<?php echo esc_url($hero_image['sizes']['hero']); ?>" id="bgvid" playsinline autoplay muted loop>
			<source src="<?php echo esc_url($video_mp4); ?>" type="video/mp4">
			<source src="<?php echo esc_url($video_webm); ?>" type="video/webm">
		</video>
	</div>
<?php elseif ($hero_image) : ?>
	<div class="background--image">
		<?php echo wp_get_attachment_image($hero_image['id'], 'full', '', ''); ?>
	</div>
<?php endif; ?>
<div class="container">
	<div class="row ">
		<div class="col-12 col-md-8 col-xl-6 col-xxxl-8">
			<h1><?php echo $heading; ?></h1>
			<p><?php echo $subheading; ?></p>
			<div class="flex--buttons">
				<a href="/our-services/" class="btn btn--secondary">Our Services</a>
				<a href="<?php echo $contact_link; ?>" class="btn btn--primary" target="_blank">Request a Consultation</a>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('components/svg/hero-curve'); ?>
