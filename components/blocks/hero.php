<?php

/**
 * Displays Hero Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$contact_link = get_field('contact_link', 'options');
$heading       = get_sub_field('heading');
$subheading              = get_sub_field('subheading');
$video_mp4    = get_sub_field('background_video_mp4');
$video_webm   = get_sub_field('background_video_webm');
$night_mp4    = get_sub_field('night_mp4');
$night_webm   = get_sub_field('night_webm');
$hero_image = get_sub_field('background_video_poster');
?>

<div class="background--image">
	<video fechpriority="high" poster="<?php echo esc_url($hero_image['sizes']['hero']); ?>" id="day" playsinline autoplay muted loop>
		<source src="<?php echo esc_url($video_mp4); ?>" type="video/mp4">
		<source src="<?php echo esc_url($video_webm); ?>" type="video/webm">
	</video>
	<video fechpriority="high" poster="<?php echo esc_url($hero_image['sizes']['hero']); ?>" id="night" playsinline autoplay muted loop>
		<source src="<?php echo esc_url($night_mp4); ?>" type="video/mp4">
		<source src="<?php echo esc_url($night_webm); ?>" type="video/webm">
	</video>
</div>
<div class="container">
	<div class="row justify-content-center ">
		<div class="col-12 col-xl-7 col-md-10">
			<h1><?php echo $heading; ?></h1>
			<p><?php echo $subheading; ?></p>
			<div class="flex--buttons">
				<a href="/shop/" class="btn btn--primary">Explore Our Products</a>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('components/svg/hero-curve'); ?>
