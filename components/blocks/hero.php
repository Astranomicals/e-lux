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
		<?php echo wp_get_attachment_image($hero_image['id'], 'hero', '', ''); ?>
	</div>
<?php endif; ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-6">
			<h1><?php echo $heading; ?></h1>
			<p><?php echo $subheading; ?></p>
			<a href="#" class="btn btn--primary">Schedule A Consultation</a>
		</div>
	</div>
</div>
