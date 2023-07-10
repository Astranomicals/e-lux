<?php

/**
 * Display Two Columns Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Astranomial Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.astranomicals.com/
 * @since      1.0.0
 */

$content = get_sub_field('content');
$image = get_sub_field('image');
$youtube_id = get_sub_field('video_id');
?>

<div class="container">
	<div class="row flex-row-reverse">
		<div class="col-xl-6 col-12 pl col-md-6">
			<div class="image--holder">
				<?php display_image($image, 'full'); ?>
				<a href="http://www.youtube.com/watch?v=<?php echo $youtube_id; ?>" class="btn--play"><i class="fas fa-play"></i></a>
			</div>
		</div>
		<div class="col-xl-6 col-12 pr col-md-6">
			<?php echo $content; ?>
		</div>
	</div>
</div>
