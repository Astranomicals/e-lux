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

$content = get_sub_field( 'content' );
$video   = get_sub_field( 'background_video' );
$video2  = get_sub_field( 'background_video_webm' );

?>
<video autoplay muted loop id="hero-video">
	<source src="<?php echo esc_url( $video ); ?>" type="video/mp4">
	<source src="<?php echo esc_url( $video2 ); ?>" type="video/mp4">
	Your browser does not support HTML5 video.
</video>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="content--square">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div>
