<?php

/**
 * Display Block
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
$video_id = get_sub_field('video_id');
$video_poster = get_sub_field('video_poster');
$column_1 = get_sub_field('column_1');
$column_2 = get_sub_field('column_2');
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-xl-10">
			<div class="top--content">
				<?php echo $content; ?>
			</div>
			<div class="content--container">
				<div class="video--holder">
					<?php display_image($video_poster, 'hero'); ?>
					<a href="https://vimeo.com/<?php echo $video_id; ?>" class="btn--play play--video"><i class="fal fa-play"></i></a>
				</div>
				<div class="content--holder">
					<div class="column-1">
						<?php echo $column_1; ?>
					</div>
					<div class="column-2">
						<?php echo $column_2; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
