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

$heading                 = get_sub_field( 'heading' );
$subheading              = get_sub_field( 'subheading' );
$background_video_mp4    = get_sub_field( 'background_video_mp4' );
$background_video_webm   = get_sub_field( 'background_video_webm' );
$background_video_poster = get_sub_field( 'background_video_poster' );
?>
<?php if ( $background_video_mp4 || $background_video_webm ) : ?>
	<video width="1920" height="1080" poster="<?php echo esc_attr( $background_video_poster['sizes']['hero'] ); ?>" controls>
		<source src="<?php echo esc_attr( $background_video_mp4 ); ?>" type="video/mp4">
		<source src="<?php echo esc_attr( $background_video_webm ); ?>" type="video/webm">
		Your browser does not support the video tag.
	</video>
<?php endif; ?>
<div class="container">
	<div class="row">
		<div class="col-12 col-xl-6">
			<h1><?php echo $heading; ?></h1>
		</div>
		<div class="col-12 col-xl-6">
			<p><?php echo $subheading; ?></p>
			<a href="/contact-us/" class="btn--circle">Schedule Consultation <i class="fal fa-long-arrow-right"></i></a>
		</div>
	</div>
</div>

<div class="scroll">
	<p>Begin Scroll</p>
	<div class="line"></div>
</div>
