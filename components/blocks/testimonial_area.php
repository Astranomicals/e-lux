<?php

/**
 * Display Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$youtube_id = get_sub_field('youtube_id');
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-8">
			<h2>Our customers say it best</h2>
			<div class="image--holder">
				<img src="https://img.youtube.com/vi/<?php echo $youtube_id; ?>/maxresdefault.jpg" />
				<a href="http://www.youtube.com/watch?v=<?php echo $youtube_id; ?>?autoplay=1" class="btn--play mfp-iframe"><i class="fas fa-play"></i></a>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<?php echo do_shortcode('[trustindex no-registration=google]'); ?>
			<a href="/reviews/" class="btn--primary btn">View all Reviews</a>
		</div>
	</div>
</div>
